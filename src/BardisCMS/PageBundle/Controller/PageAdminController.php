<?php

/*
 * Page Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\PageBundle\Controller;

use BardisCMS\PageBundle\Entity\Page;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand;
use Symfony\Component\Process\Process;

class PageAdminController extends Controller {
    
    // Defining the custom sonata admin action for the duplicate page feature
    public function duplicateAction($id = null) {
	// The sonata admin action key used to lookup the template to use for this action 
	$templateKey = 'edit';

	$id = $this->get('request')->get($this->admin->getIdParameter());
	
	// Using the selected page details to create a copy with no content blocks
	$clonedObject = $this->admin->getObject($id);
	$clonedObject->setTitle($clonedObject->getTitle() . ' Clone');
	$clonedObject->setAlias($clonedObject->getAlias() . '-clone');
	$date = new \DateTime();
	$clonedObject->setDate($date);

	$object = $this->admin->getNewInstance();

	if (!$object) {
	    throw new NotFoundHttpException(sprintf('unable to find the page with id : %s', $id));
	}

	if (false === $this->admin->isGranted('CREATE')) {
	    throw new AccessDeniedException();
	}

	$this->admin->setSubject($object);

	$form = $this->admin->getForm();
	$form->setData($clonedObject);

	foreach ($form->getData()->getMaincontentblocks() as $maincontentblock) {
	    unset($maincontentblock);
	}

	foreach ($form->getData()->getBannercontentblocks() as $bannercontentblock) {
	    unset($bannercontentblock);
	}

	foreach ($form->getData()->getSecondarycontentblocks() as $secondarycontentblock) {
	    unset($secondarycontentblock);
	}

	foreach ($form->getData()->getExtracontentblocks() as $extracontentblock) {
	    unset($extracontentblock);
	}

	foreach ($form->getData()->getModalcontentblocks() as $modalcontentblock) {
	    unset($modalcontentblock);
	}

	if ($this->get('request')->getMethod() == 'POST') {
	    $form->bind($this->get('request'));

	    $isFormValid = $form->isValid();

	    // persist if the form was valid and if in preview mode the preview was approved
	    if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved())) {
		$this->admin->create($object);

		if ($this->isXmlHttpRequest()) {
		    return $this->renderJson(array(
				'result' => 'ok',
				'objectId' => $this->admin->getNormalizedIdentifier($object)
		    ));
		}

		$this->get('session')->setFlash('sonata_flash_success', 'flash_create_success');
		// redirect to edit mode
		return $this->redirectTo($object);
	    }

	    // show an error message if the form failed validation
	    if (!$isFormValid) {
		$this->get('session')->setFlash('sonata_flash_error', 'flash_create_error');
	    } elseif ($this->isPreviewRequested()) {
		// pick the preview template if the form was valid and preview was requested
		$templateKey = 'preview';
	    }
	}

	$view = $form->createView();

	// Set the theme for the current Admin Form
	$this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());

	return $this->render($this->admin->getTemplate($templateKey), array(
		    'action' => 'create',
		    'form' => $view,
		    'object' => $object,
	));
    }
	
	public function clearCacheAction() {
		
		$this->get('security.context')->setToken(null);
		$this->get('session')->invalidate();
		
		/* Sample of how you can call CLI command from a controller
		$input = new StringInput(null);
		$output = new NullOutput();
		$realCacheDir = $this->container->getParameter('kernel.cache_dir');
		$filesystem   = $this->container->get('filesystem');

        if (!is_writable($realCacheDir)) {
            throw new \RuntimeException(sprintf('Unable to write in the "%s" directory', $realCacheDir));
        }

		$command = new CacheClearCommand();
		$command->setContainer($this->container);
		$command->run($input, $output);
		var_dump($output);
		*/

        return new RedirectResponse('/clear-cache.php');
	}
	
	public function clearCacheProdAction() {
		
		$this->get('security.context')->setToken(null);
		$this->get('session')->invalidate();

        return new RedirectResponse('/clear-cache-prod.php');
	}

}
