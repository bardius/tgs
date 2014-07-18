<?php

/*
 * Destination Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\DestinationBundle\Controller;

use BardisCMS\DestinationBundle\Entity\Destination;
use BardisCMS\PageBundle\Entity\Page;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    
    // Get the Destination page id based on alias from route
    public function aliasAction($alias, $extraParams = null, $currentpage = 0, $totalpageitems = 0) 
    {

        $page = $this->getDoctrine()->getRepository('DestinationBundle:Destination')->findOneByAlias($alias);
        
        if (!$page) {
            return $this->render404Page();
        }
        
        $linkUrlParams = $extraParams;
		
        return $this->showPageAction($page->getId(), $extraParams, $currentpage, $totalpageitems, $linkUrlParams);
    }
    
    
    // Set the variables and render the view to display page
    public function showPageAction($id, $extraParams = null, $currentpage = null, $totalpageitems = null, $linkUrlParams = null)
    {   
        
        // Get data to display
        $page       = $this->getDoctrine()->getRepository('DestinationBundle:Destination')->find($id);        
        $userRole   = $this->get('sonata_user.services.helpers')->getLoggedUserHighestRole();        
        $settings   = $this->get('bardiscms_settings.load_settings')->loadSettings();

        
        // Simple ACL for publishing
        if($page->getPublishState() == 0)
        {   
            return $this->render404Page();
        }
            
        if($page->getPublishState() == 2 && $userRole == '')
        {   
            return $this->render404Page();
        }
        
        if ($userRole == "")
        {
            $publishStates = array(1);
        }
        else
        {
            $publishStates = array(1, 2);                
        }
		
		//var_dump($this->container->getParameter('kernel.environment'));
		
		if($this->container->getParameter('kernel.environment') == 'prod' && $settings->getActivateHttpCache()){
			
			$response = new Response();
			
			// set a custom Cache-Control directive
			$response->headers->addCacheControlDirective('must-revalidate', true);
			// set multiple vary headers
			$response->setVary(array('Accept-Encoding', 'User-Agent'));
			// create a Response with a Last-Modified header
			$response->setLastModified($page->getDateLastModified());
			// Set response as public. Otherwise it will be private by default.
			$response->setPublic();
			
			//var_dump($response->isNotModified($this->getRequest()));
			//var_dump($response->getStatusCode());
			if (!$response->isNotModified($this->getRequest())) {
				// Marks the Response stale
				$response->expire();
			}
			else{				
				// return the 304 Response immediately
				$response->setSharedMaxAge(3600);
				$response->setMaxAge(3600);
				return $response;
			}
		}
        
        // Set the website settings and metatags
		$page = $this->get('bardiscms_settings.set_page_settings')->setPageSettings($page);
        
        // Set the pagination variable
        $totalpageitems = 50;
        
        // Render the correct view depending on pagetype
        return $this->renderPage($page, $id, $publishStates, $extraParams, $currentpage, $totalpageitems, $linkUrlParams);        
    }
	
    
    // Get the required data to display to the correct view depending on pagetype
    public function renderPage($page, $id, $publishStates, $extraParams, $currentpage, $totalpageitems, $linkUrlParams){
		// Check if mobile content should be served		
        $serveMobile = $this->get('bardiscms_mobile_detect.device_detection')->testMobile();
		$settings = $this->get('bardiscms_settings.load_settings')->loadSettings();
                        
        if ($page->getPageType() == 'destination_cat_page')
        {        
            $categoryIds	= $page->getCategories()->toArray();
			
            $pageList		= $this->getDoctrine()->getRepository('DestinationBundle:Destination')->getCategoryItems($categoryIds, $id, $publishStates, $currentpage, $totalpageitems);
                        
            $pages			= $pageList['pages'];
            $totalPages		= $pageList['totalPages'];
            
            $response = $this->render('DestinationBundle:Default:page.html.twig', array('page' => $page, 'pages' => $pages, 'totalPages' => $totalPages, 'extraParams' => $extraParams, 'currentpage' => $currentpage, 'linkUrlParams' => $linkUrlParams, 'totalpageitems' => $totalpageitems));
        }
        else if ($page->getPageType() == 'destination_home')
        {
            $pageList	= $this->getDoctrine()->getRepository('DestinationBundle:Destination')->getDestinationHomeItems($publishStates);
            
            $pages      = $pageList['pages'];
            
            $response = $this->render('DestinationBundle:Default:page.html.twig', array('page' => $page, 'pages' => $pages, 'extraParams' => $extraParams, 'linkUrlParams' => $linkUrlParams));
        }
        else if ($page->getPageType() == 'destination_article')
        {
			$relatedSpots	= $this->getDoctrine()->getRepository('DestinationBundle:Destination')->getRelatedSpots($id, $publishStates);
            
            $response = $this->render('DestinationBundle:Default:page.html.twig', array('page' => $page, 'relatedSpots' => $relatedSpots));            
        }
		else{        
			$response = $this->render('DestinationBundle:Default:page.html.twig', array('page' => $page));			
		}
		
		if($this->container->getParameter('kernel.environment') == 'prod' && $settings->getActivateHttpCache()){	
			// set a custom Cache-Control directive
			$response->setPublic();
			$response->setLastModified($page->getDateLastModified());
			$response->setVary(array('Accept-Encoding', 'User-Agent'));
			$response->headers->addCacheControlDirective('must-revalidate', true);
			$response->setSharedMaxAge(3600);
			$response->setMaxAge(3600);
		}
		
		return $response;
    }
    
    
    // Get and display to the 404 error page
    public function render404Page()
    {        
        $page = $this->getDoctrine()->getRepository('PageBundle:Page')->findOneByAlias('404');
		$settings = $this->get('bardiscms_settings.load_settings')->loadSettings();
        
        // Check if page exists
        if (!$page) {
            throw $this->createNotFoundException('No error page exists. No page found for with alias 404. Page has id: ' . $page->getId());
        }
        
        // Set the website settings and metatags
		$page = $this->get('bardiscms_settings.set_page_settings')->setPageSettings($page);
        
        $response = $this->render('PageBundle:Default:page.html.twig', array('page' => $page))->setStatusCode(404);
		
		if($this->container->getParameter('kernel.environment') == 'prod' && $settings->getActivateHttpCache()){
			// set a custom Cache-Control directive
			$response->setPublic();
			$response->setLastModified($page->getDateLastModified());
			$response->setVary(array('Accept-Encoding', 'User-Agent'));
			$response->headers->addCacheControlDirective('must-revalidate', true);
			$response->setSharedMaxAge(3600);
			$response->setMaxAge(3600);
		}
		
		return $response;
    } 
    
}