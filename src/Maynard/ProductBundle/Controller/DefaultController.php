<?php
/*
 * Product Bundle
 * This file is part of the maynard malone CMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */
namespace Maynard\ProductBundle\Controller;

use Maynard\ProductBundle\Entity\Product;
use Maynard\PageBundle\Entity\Page;
use Maynard\ProductBundle\Form\FilterResultsForm;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    
    // Get the Product page id based on alias from route
    public function aliasAction($alias, $extraParams = null, $currentpage = 0, $totalpageitems = 0) 
    {

        $page = $this->getDoctrine()->getRepository('ProductBundle:Product')->findOneByAlias($alias);
        
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
        $page       = $this->getDoctrine()->getRepository('ProductBundle:Product')->find($id);        
        $userRole   = $this->getLoggedUserHighestRole();        
        $settings   = $this->get('maynard_settings.load_settings')->loadSettings();
        
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
        
        // Set the pagination variables        
        if(is_object($settings))
        {        
            if(!$totalpageitems)
            {
                $totalpageitems = $settings->getBlogItemsPerPage();
            }               
        }
        else
        {
            $totalpageitems = 10;                 
        }
        
        // Render the correct view depending on pagetype
        return $this->renderPage($page, $id, $publishStates, $extraParams, $currentpage, $totalpageitems, $linkUrlParams);        
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
    
    
    // Get the tags and / or categories for filtering from the request
    // filters are like: tag1,tag2|category1,category1 and each argument
    // is url encoded. If all is passed as argument value everything is fetched
    // be aware that if a comma exists in the one of the values it will not work properly
    public function getRequestedFilters($extraParams)
    {
        
        $selectedTags       = array();
        $selectedCategories = array();        
        $extraParams        = explode('|', $extraParams);
        
        if (isset($extraParams[0]))
        {
            if($extraParams[0] == 'all')
            {
                $selectedTags[] = null;
            }
            else
            {
                $tags = explode(',', urldecode($extraParams[0]));
                foreach($tags as $tag)
                {
                    $selectedTagObject = $this->getDoctrine()->getRepository('ProductBundle:ProductTag')->findOneByTitle(urldecode($tag));
                    
                    $tagCategoryName = $selectedTagObject->getTagCategory();

                    if($tagCategoryName != null)
                    {
                        if (!array_key_exists('tags'.$tagCategoryName, $selectedTags))
                        {
                            $selectedTags['tags'.$tagCategoryName] = array();                            
                        }

                        $selectedTags['tags'.$tagCategoryName][] = $selectedTagObject;                   
                    }         
                }
            }
        }
        else
        {
            $selectedTags[] = null;
        }
        
        if (isset($extraParams[1]))
        {
            if($extraParams[1] == 'all'|| $extraParams[1] == 'Homepage')
            {
                $selectedCategories[] = null;
            }
            else
            {
                $categories = explode(',', urldecode($extraParams[1]));
                foreach($categories as $category)
                {
                    $selectedCategories[] = $this->getDoctrine()->getRepository('ProductBundle:ProductCategory')->findOneByTitle(urldecode($category));
                }
            }
        }
        else
        {
            $selectedCategories[] = null;
        }
        
        $filterParams = array();
        
        foreach($selectedTags as $tagCategory => $selectedTags){
            if($selectedTags != null)
            {
                $filterParams[$tagCategory] = new \Doctrine\Common\Collections\ArrayCollection($selectedTags);
            }
            else
            {
                $filterParams['tags'] = new \Doctrine\Common\Collections\ArrayCollection();                
            }
        }
                    
        $filterParams['categories'] = new \Doctrine\Common\Collections\ArrayCollection($selectedCategories);
        
        return $filterParams;
    }
    
    
    // Get the ids of the filter categories
    public function getCategoryFilterIds($selectedCategoriesArray)
    {
        
        $categoryIds = array(); 
        
        if(empty($selectedCategoriesArray[0]))
        {
            $selectedCategoriesArray = $this->getDoctrine()->getRepository('ProductBundle:ProductCategory')->findAll();
        }
        
        foreach($selectedCategoriesArray as $selectedCategoriesEntity)
        {
            $categoryIds[] = $selectedCategoriesEntity->getId();     
        }
        
        return $categoryIds;
    }
    
    
    // Get the ids of the filter tags
    public function getTagFilterIds($selectedTagsArray)
    {       
        
        $tagIds = array();      
        
        if(empty($selectedTagsArray[0]))
        {
            $selectedTagsArray = $this->getDoctrine()->getRepository('ProductBundle:ProductTag')->findAll();
        }
        
        foreach($selectedTagsArray as $selectedTagEntity)
        {
            $tagIds[] = $selectedTagEntity->getId();     
        }
        
        return $tagIds;
    }
    
    
    // Set the settings as defined from the service of the settings bundle
    // alternative could be to skip that bundle and use the config.yml
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
    
    
    // Get the required data to display to the correct view depending on pagetype
    public function renderPage($page, $id, $publishStates, $extraParams, $currentpage, $totalpageitems, $linkUrlParams)
    {
                        
        if ($page->getPagetype() == 'product_cat_page')
        {            
            $tagIds         = $page->getTags()->toArray();
            $categoryIds    = $page->getCategories()->toArray();
            
            $filterForm     = $this->createForm('productfiltersform');               
            $filterData     = $this->getRequestedFilters($extraParams);
            
            foreach($tagIds as $key => $tag)
            {
                $tagCategoryName = 'tags'.$tag->getTagCategory();
                
                if (!array_key_exists($tagCategoryName, $filterData))
                {
                    $filterData[$tagCategoryName] = new \Doctrine\Common\Collections\ArrayCollection(); 
                }
                    
                $filterData[$tagCategoryName]->set($key, $tag);
            }
            
            foreach($categoryIds as $key => $category)
            {
                if($category->getTitle() != 'Homepage')
                {
                    $filterData['categories']->set($key, $category);
                }
                else
                {
                    unset($categoryIds[$key]);
                }
            }
            
            $filterForm->setData($filterData); 
            
            if(!empty($tagIds) && !empty($categoryIds))
            {                
                $pageList = $this->getDoctrine()->getRepository('ProductBundle:Product')->getTaggedCategoryItems($categoryIds, $id, $publishStates, $currentpage, $totalpageitems, $tagIds);                
            }
            if(!empty($tagIds) && empty($categoryIds))
            {                
                $pageList = $this->getDoctrine()->getRepository('ProductBundle:Product')->getTaggedItems($tagIds, $id, $publishStates, $currentpage, $totalpageitems);                
            }
            else
            {
                $pageList = $this->getDoctrine()->getRepository('ProductBundle:Product')->getCategoryItems($categoryIds, $id, $publishStates, $currentpage, $totalpageitems);
            }
            
            $pages      = $pageList['pages'];
            $totalPages = $pageList['totalPages'];
            
            return $this->render('ProductBundle:Default:page.html.twig', array('page' => $page, 'pages' => $pages, 'totalPages' => $totalPages, 'extraParams' => $extraParams, 'currentpage' => $currentpage, 'linkUrlParams' => $linkUrlParams, 'totalpageitems' => $totalpageitems, 'filterForm' => $filterForm->createView()));
        }      
        else if ($page->getPagetype() == 'product_filtered_list')
        {          
            $filterForm     = $this->createForm('productfiltersform');                
            $filterData     = $this->getRequestedFilters($extraParams);
            $tagIds         = array();            
            $categoryIds    = array();
            
            foreach($filterData as $filterDataType => $selectedFilter){
                if($filterDataType == 'categories')
                {
                    $categoryIds = $this->getCategoryFilterIds($selectedFilter->toArray());                    
                }
                else
                {
                   $tagIds = array_merge($tagIds, $this->getTagFilterIds($selectedFilter->toArray()));
                }
            }
            
            $filterForm->setData($filterData); 
            
            if(!empty($categoryIds))
            {                
                $pageList = $this->getDoctrine()->getRepository('ProductBundle:Product')->getTaggedCategoryItems($categoryIds, $id, $publishStates, $currentpage, $totalpageitems, $tagIds);                
            }
            else
            {            
                $pageList  = $this->getDoctrine()->getRepository('ProductBundle:Product')->getTaggedItems($tagIds, $id, $publishStates, $currentpage, $totalpageitems);
            }
            
            $pages      = $pageList['pages'];
            $totalPages = $pageList['totalPages'];
            
            return $this->render('ProductBundle:Default:page.html.twig', array('page' => $page, 'pages' => $pages, 'totalPages' => $totalPages, 'extraParams' => $extraParams, 'currentpage' => $currentpage, 'linkUrlParams' => $linkUrlParams, 'totalpageitems' => $totalpageitems, 'filterForm' => $filterForm->createView()));
        }
        else if ($page->getPagetype() == 'product_home')
        {   
            
            $filterForm     = $this->createForm('productfiltersform');               
            $filterData     = $this->getRequestedFilters($extraParams);            
            $filterForm->setData($filterData); 
            
            $pageList = $this->getDoctrine()->getRepository('ProductBundle:Product')->getAllItems($id, $publishStates, $currentpage, $totalpageitems);
            
            $pages      = $pageList['pages'];
            $totalPages = $pageList['totalPages'];
            
            return $this->render('ProductBundle:Default:page.html.twig', array('page' => $page, 'pages' => $pages, 'totalPages' => $totalPages,  'extraParams' => $extraParams, 'currentpage' => $currentpage, 'linkUrlParams' => $linkUrlParams, 'totalpageitems' => $totalpageitems, 'filterForm' => $filterForm->createView()));
        }
        else if ($page->getPagetype() == 'product_article')
        {   
            $relatedRecipes = $this->getDoctrine()->getRepository('RecipeBundle:Recipe')->getRelatedProductRecipes($id, $publishStates);
            $rangeList      = $this->getDoctrine()->getRepository('ProductBundle:Product')->getRangeList($id, $publishStates);

            return $this->render('ProductBundle:Default:page.html.twig', array('page' => $page, 'relatedrecipes' => $relatedRecipes, 'rangelist' => $rangeList));
        }
        
        return $this->render('ProductBundle:Default:page.html.twig', array('page' => $page));
    }
    
    
    // Get and display to the 404 error page
    public function render404Page()
    {
        
        $page       = $this->getDoctrine()->getRepository('PageBundle:Page')->findOneByAlias('404');
        $settings   = $this->get('maynard_settings.load_settings')->loadSettings();
        
        // Check if page exists
        if (!$page) {
            throw $this->createNotFoundException('No error page exists. No page found for with alias 404. Page has id: ' . $page->getId());
        }
        
        // Set the website settings and metatags
        $page = $this->setSettings($settings, $page);
        
        return $this->render('PageBundle:Default:page.html.twig', array('page' => $page))->setStatusCode(404);
    }
    
    // Get and format the filtering arguments to use with the actions 
    public function filterPagesAction(Request $request) 
    {
        
        $filterTags         = 'all';
        $filterCategories   = 'all'; 
        $filterForm         = $this->createForm('productfiltersform');
        $filterData         = null;
        
        if ($request->getMethod() == 'POST') {
            
            $filterForm->bindRequest($request);
            $filterData = $filterForm->getData();
            
            $selectedTagsCategoriesArray    = array($filterData['tagssugar_type'], $filterData['tagsexcellent'], $filterData['tagsbody']);
            $filterTags                     = $this->getTagFilterTitles($selectedTagsCategoriesArray);
            $filterCategories               = $this->getCategoryFilterTitles($filterData['categories']);
        }
            
        $extraParams = urlencode($filterTags) . '|' . urlencode($filterCategories);
        
        $url = $this->get('router')->generate(
            'ProductBundle_tagged_full',
            array('extraParams' => $extraParams),
            true
        );
        
        return $this->redirect($url);
    }
    
    
    // Get the titles of the filter categories
    public function getCategoryFilterTitles($selectedCategoriesArray)
    {
        
        $categories = array(); 
        
        if(!empty($selectedCategoriesArray))
        {
            foreach($selectedCategoriesArray as $selectedCategoriesEntity)
            {
                $categories[] = $selectedCategoriesEntity->getTitle();     
            }
        }
        
        $filterCategories = implode(',', $categories);
        
        if(empty($filterCategories))
        {
            $filterCategories = 'all';
        }    
        
        return $filterCategories;
    }
    
    
    // Get the titles of the filter tags
    public function getTagFilterTitles($selectedTagsCategoriesArray)
    {          
        $tags = array();
        
        foreach($selectedTagsCategoriesArray as $selectedTagArray)
        { 
            if(!empty($selectedTagArray))
            {
                foreach($selectedTagArray as $selectedTagEntity)
                {
                    $tags[] = $selectedTagEntity->getTitle();   
                }
            }
        }
        
        $filterTags = implode(',', $tags);
        
        if(empty($filterTags))
        {
            $filterTags = 'all';
        }   
        
        return $filterTags;
    }
}