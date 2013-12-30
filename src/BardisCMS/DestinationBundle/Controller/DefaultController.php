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
        $userRole   = $this->getLoggedUserHighestRole();        
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
        
        // Set the website settings and metatags
        $page = $this->setSettings($settings, $page);
        
        // Set the pagination variable
        $totalpageitems = 50;
        
        // Render the correct view depending on pagetype
        return $this->renderPage($page, $id, $publishStates, $extraParams, $currentpage, $totalpageitems, $linkUrlParams);        
    }
	
    
    // Get the required data to display to the correct view depending on pagetype
    public function renderPage($page, $id, $publishStates, $extraParams, $currentpage, $totalpageitems, $linkUrlParams)
    {
                        
        if ($page->getPageType() == 'destination_cat_page')
        {        
            $categoryIds	= $page->getCategories()->toArray();
			
            $pageList		= $this->getDoctrine()->getRepository('DestinationBundle:Destination')->getCategoryItems($categoryIds, $id, $publishStates, $currentpage, $totalpageitems);
                        
            $pages			= $pageList['pages'];
            $totalPages		= $pageList['totalPages'];
            
            return $this->render('DestinationBundle:Default:page.html.twig', array('page' => $page, 'pages' => $pages, 'totalPages' => $totalPages, 'extraParams' => $extraParams, 'currentpage' => $currentpage, 'linkUrlParams' => $linkUrlParams, 'totalpageitems' => $totalpageitems));
        }
        else if ($page->getPageType() == 'destination_home')
        {
            $pageList	= $this->getDoctrine()->getRepository('DestinationBundle:Destination')->getDestinationHomeItems($publishStates);
            
            $pages      = $pageList['pages'];
            
            return $this->render('DestinationBundle:Default:page.html.twig', array('page' => $page, 'pages' => $pages, 'extraParams' => $extraParams, 'linkUrlParams' => $linkUrlParams));
        }
        else if ($page->getPageType() == 'destination_article')
        {
			$relatedSpots	= $this->getDoctrine()->getRepository('DestinationBundle:Destination')->getRelatedSpots($id, $publishStates);
            
            return $this->render('DestinationBundle:Default:page.html.twig', array('page' => $page, 'relatedSpots' => $relatedSpots));            
        }
        
        return $this->render('DestinationBundle:Default:page.html.twig', array('page' => $page));
    }
    
    
    // Get and display to the 404 error page
    public function render404Page()
    {
        
        $page       = $this->getDoctrine()->getRepository('PageBundle:Page')->findOneByAlias('404');
        $settings   = $this->get('bardiscms_settings.load_settings')->loadSettings();
        
        // Check if page exists
        if (!$page) {
            throw $this->createNotFoundException('No error page exists. No page found for with alias 404. Page has id: ' . $page->getId());
        }
        
        // Set the website settings and metatags
        $page = $this->setSettings($settings, $page);
        
        return $this->render('PageBundle:Default:page.html.twig', array('page' => $page))->setStatusCode(404);
    }
    
    
    // Get the user role ( @TODO: this is very simple ACL and has to be improved )
    public function getLoggedUserHighestRole()
    {
        
        if ($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            $userRole = 'ROLE_SUPER_ADMIN';
        }
        else if ($this->get('security.context')->isGranted('ROLE_USER')) {
            $userRole = 'ROLE_USER';
        }
        else
        {
            $userRole = '';
        }
        
        return $userRole;
    }    
    
    // Set the settings as defined from the service of the settings bundle
    public function setSettings($settings, $page)
    {
        if(is_object($settings))
        {         
            if($settings->getUseWebsiteAuthor())
            {
               $page->metaAuthor = $settings->getWebsiteAuthor();
            }
            else
            {
               $page->metaAuthor = $page->getAuthor()->getUsername();
            }

            $pageTitle          = $page->getTitle();
            $titleKeywords      = trim(preg_replace("/\b[A-za-z0-9']{1,3}\b/", "", strtolower($pageTitle)));
            $titleKeywords      = str_replace(' ', ',', preg_replace('!\s+!', ' ', $titleKeywords));        
            $fromTitle          = $pageTitle . ' ' . $settings->getFromTitle();
            $pageTitle          .= ' - ' . $settings->getWebsiteTitle();

            $page->pagetitle    = $pageTitle;

            $page->enableGA     = $settings->getEnableGoogleAnalytics();
            $page->gaID         = $settings->getGoogleAnalyticsId();

            if($page->getKeywords() == null)
            {
               $page->setKeywords($settings->getMetaKeywords() . ',' . $titleKeywords);
            }
            else
            {
                $page->setKeywords($page->getKeywords() . ',' . $titleKeywords);
            }

            if($page->getDescription() == null)
            {
                $page->setDescription($settings->getMetaDescription() . ' ' . $fromTitle);
            }
            else
            {
                $page->setDescription($page->getDescription() . ' ' . $fromTitle);
            } 
        }
        else
        {
            $page->metaAuthor   = '';
            $pageTitle          = $page->getTitle();
            $titleKeywords      = trim(preg_replace("/\b[A-za-z0-9']{1,3}\b/", "", strtolower($pageTitle)));
            $titleKeywords      = str_replace(' ', ',', preg_replace('!\s+!', ' ', $titleKeywords)); 
            $page->pagetitle    = $pageTitle; 
            $page->enableGA     = false;
            $page->gaID         = null;
            
            $page->setDescription($page->getDescription());
            $page->setKeywords($page->getKeywords() . ',' . $titleKeywords);
        }        
        
        return $page;
    }    
	
}