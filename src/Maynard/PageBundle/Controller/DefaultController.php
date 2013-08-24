<?php
/*
 * Page Bundle
 * This file is part of the maynard malone CMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */
namespace Maynard\PageBundle\Controller;

use Maynard\PageBundle\Entity\Page;
use Maynard\PageBundle\Form\ContactForm;
use Maynard\PageBundle\Form\FilterResultsForm;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Email;

class DefaultController extends Controller
{   
    
    // Get the page id based on alias from route
    public function aliasAction($alias, $extraParams = null, $currentpage = 0, $totalpageitems = 0) 
    {
               
        $page = $this->getDoctrine()->getRepository('PageBundle:Page')->findOneByAlias($alias);
        
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
        $page       = $this->getDoctrine()->getRepository('PageBundle:Page')->find($id);        
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
                $totalpageitems = $settings->getItemsPerPage();
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
    public function getRequestedFilters($extraParams)
    {
        
        $selectedTags       = array();
        $selectedCategories = array();        
        $extraParams        = explode('|', $extraParams);
        
        if (isset($extraParams[0]))
        {
            if($extraParams[0] == 'all')
            {
                $selectedTags[] = null;//$this->getDoctrine()->getRepository('PageBundle:Tag')->findAll();
            }
            else
            {
                $tags = explode(',', $extraParams[0]);
                foreach($tags as $tag)
                {
                    $selectedTags[] = $this->getDoctrine()->getRepository('PageBundle:Tag')->findOneByTitle(urldecode($tag));
                }
            }
        }
        else
        {
            $selectedTags[] = null;
        }
        
        if (isset($extraParams[1]))
        {
            if($extraParams[1] == 'all')
            {
                $selectedCategories[] = null;//$this->getDoctrine()->getRepository('PageBundle:Category')->findAll();
            }
            else
            {
                $categories = explode(',', $extraParams[1]);
                foreach($categories as $category)
                {
                    $selectedCategories[] = $this->getDoctrine()->getRepository('PageBundle:Category')->findOneByTitle(urldecode($category));
                }
            }
        }
        else
        {
            $selectedCategories[] = null;
        }
        
        $filterParams = array('tags' => new \Doctrine\Common\Collections\ArrayCollection($selectedTags), 'categories' => new \Doctrine\Common\Collections\ArrayCollection($selectedCategories));
        
        return $filterParams;
    }
    
    
    // Get the ids of the filter categories
    public function getCategoryFilterIds($selectedCategoriesArray)
    {
        
        $categoryIds = array(); 
        
        if(empty($selectedCategoriesArray[0]))
        {
            $selectedCategoriesArray = $this->getDoctrine()->getRepository('PageBundle:Category')->findAll();
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
            $selectedTagsArray = $this->getDoctrine()->getRepository('PageBundle:Tag')->findAll();
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
        $serveMobile = $this->isMobile();
        
        if ($page->getPagetype() == 'category_page') 
        {           
            $tagIds      = $this->getTagFilterIds($page->getTags()->toArray());           
            $categoryIds = $this->getCategoryFilterIds($page->getCategories()->toArray());
            
            if(!empty($tagIds))
            {                
                $pageList = $this->getDoctrine()->getRepository('PageBundle:Page')->getTaggedCategoryItems($categoryIds, $id, $publishStates, $currentpage, $totalpageitems, $tagIds);                
            }
            else
            {
                $pageList = $this->getDoctrine()->getRepository('PageBundle:Page')->getCategoryItems($categoryIds, $id, $publishStates, $currentpage, $totalpageitems);
            }
            
            $pages      = $pageList['pages'];
            $totalPages = $pageList['totalPages'];
            
            return $this->render('PageBundle:Default:page.html.twig', array('page' => $page, 'pages' => $pages, 'totalPages' => $totalPages, 'extraParams' => $extraParams, 'currentpage' => $currentpage, 'linkUrlParams' => $linkUrlParams, 'totalpageitems' => $totalpageitems, 'mobile' => $serveMobile));
        }        
        else if ($page->getPagetype() == 'page_tag_list') 
        {   
            $filterForm     = $this->createForm(new FilterResultsForm());                
            $filterData     = $this->getRequestedFilters($extraParams);
            $tagIds         = $this->getTagFilterIds($filterData['tags']->toArray());           
            $categoryIds    = $this->getCategoryFilterIds($filterData['categories']->toArray());
                
            $filterForm->setData($filterData); 
            
            if(!empty($categoryIds))
            {                
                $pageList = $this->getDoctrine()->getRepository('PageBundle:Page')->getTaggedCategoryItems($categoryIds, $id, $publishStates, $currentpage, $totalpageitems, $tagIds);                
            }
            else
            {            
                $pageList  = $this->getDoctrine()->getRepository('PageBundle:Page')->getTaggedItems($tagIds, $id, $publishStates, $currentpage, $totalpageitems);
            }
            
            $pages      = $pageList['pages'];
            $totalPages = $pageList['totalPages'];
            
            return $this->render('PageBundle:Default:page.html.twig', array('page' => $page, 'pages' => $pages, 'totalPages' => $totalPages, 'extraParams' => $extraParams, 'currentpage' => $currentpage, 'linkUrlParams' => $linkUrlParams, 'totalpageitems' => $totalpageitems, 'filterForm' => $filterForm->createView(), 'mobile' => $serveMobile));
        }        
        else if ($page->getPagetype() == 'homepage') 
        {   
            $categoryIds    = $this->getCategoryFilterIds($page->getCategories()->toArray());
            
            $pages          = array();
            $blogpages      = array(); 
            $recipepages    = array(); 
            $productpages   = array();            
            $pages          = $this->getDoctrine()->getRepository('PageBundle:Page')->getHomepageItems($categoryIds, $id, $publishStates);
            $blogpages      = $this->getDoctrine()->getRepository('BlogBundle:Blog')->getHomepageItems($categoryIds, $publishStates);
            $recipepages    = $this->getDoctrine()->getRepository('RecipeBundle:Recipe')->getHomepageItems(8, $publishStates);
            $productpages   = $this->getDoctrine()->getRepository('ProductBundle:Product')->getHomepageItems(8, $publishStates);
            
            $pages          = array_merge($pages, $blogpages, $recipepages, $productpages);
            usort($pages, array("Maynard\PageBundle\Controller\DefaultController", "sortHomepageItemsCompare"));
            
            return $this->render('PageBundle:Default:page.html.twig', array('page' => $page, 'pages' => $pages, 'mobile' => $serveMobile));
        }        
        else if ($page->getPagetype() == 'contact') 
        {            
            return $this->contactForm($this->getRequest(), $page);
        }
        
        return $this->render('PageBundle:Default:page.html.twig', array('page' => $page, 'mobile' => $serveMobile));
        
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
    
    
    // Get and display the sitemap xml
    public function sitemapAction()
    {
        
        $userRole   = $this->getLoggedUserHighestRole();
                        
        if ($userRole == "")
        {
            $publishStates = array(1);
        }
        else
        {
            $publishStates = array(1, 2);                
        }
        
        $sitemapList    = array();
        $blogpages      = array(); 
        $recipepages    = array(); 
        $productpages   = array();
        
        $sitemapList    = $this->getDoctrine()->getRepository('PageBundle:Page')->getSitemapList($publishStates);
        $blogpages      = $this->getDoctrine()->getRepository('BlogBundle:Blog')->getSitemapList($publishStates);
        $recipepages    = $this->getDoctrine()->getRepository('RecipeBundle:Recipe')->getSitemapList($publishStates);
        $productpages   = $this->getDoctrine()->getRepository('ProductBundle:Product')->getSitemapList($publishStates);
        
        $sitemapList    = array_merge($sitemapList, $blogpages, $recipepages, $productpages);
        
        return $this->render('PageBundle:Default:sitemap.xml.twig', array('sitemapList' => $sitemapList));
    }
    
    
    // Get and display the sitemap xsl
    public function sitemapxslAction()
    {     
        
        return $this->render('PageBundle:Default:sitemap.xsl.twig');
    }
    
    
    // Get the contact form page
    public function contactForm(Request $request, $page) 
    { 
        $settings                   = $this->get('maynard_settings.load_settings')->loadSettings();
        $email                      = array();
        $ajaxForm                   = true;        
        $form                       = $this->createForm(new ContactForm(), $email);
        $emailConstraint            = new Email();
        $emailConstraint->message   = 'Please enter a valid email address';
        
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $emailData = $form->getData();
                
                $errorList = $this->get('validator')->validateValue(
                    $emailData['email'],
                    $emailConstraint
                );
                
                if (count($errorList) == 0) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Enquiry from Tate & Lyle website: ' . $emailData['firstname'] .' ' . $emailData['surname'])
                    ->setFrom($emailData['email'])
                    ->setTo($settings->getEmailRecepient())
                    ->setBody($this->renderView('PageBundle:Email:contactFormEmail.txt.twig', array('sender' => $emailData['firstname'] . ' ' . $emailData['surname'], 'mailData' => $emailData['comment'])));                
                
                    $this->get('mailer')->send($message);
                    
                    $formMessage    = 'Thank you for contacting us, we will be in touch soon';
                    $formhasErrors  = false;
                }
                else
                {
                    $formMessage    = $errorList[0]->getMessage();
                    $formhasErrors  = true;
                }
                
                if($ajaxForm)
                {
                    $ajaxFormData = array(
                        'message'   => $formMessage, 
                        'error'     => $formhasErrors
                    );
                    $ajaxFormResponce = new Response(json_encode($ajaxFormData));
                    $ajaxFormResponce->headers->set('Content-Type', 'application/json');
                    
                    return $ajaxFormResponce;
                }
                else
                {                    
                    return $this->render('PageBundle:Default:page.html.twig', array('page' => $page, 'form' => $form->createView(), 'ajaxform' => $ajaxForm, 'formMessage' => $formMessage));                    
                }
            }
        }
        else
        {          
            return $this->render('PageBundle:Default:page.html.twig', array('page' => $page, 'form' => $form->createView(), 'ajaxform' => $ajaxForm));
        }
    }
    
    
    // Get and format the filtering arguments to use with the actions 
    public function filterPagesAction(Request $request) 
    {
        
        $filterTags         = 'all';
        $filterCategories   = 'all'; 
        $filterForm         = $this->createForm(new FilterResultsForm());
        $filterData         = null;
        
        if ($request->getMethod() == 'POST') {
            
            $filterForm->bindRequest($request);
            $filterData = $filterForm->getData();
            
            $filterTags         = $this->getTagFilterTitles($filterData['tags']);     
            $filterCategories   = $this->getCategoryFilterTitles($filterData['categories']);
        }
            
        $extraParams = urlencode($filterTags) . '|' . urlencode($filterCategories);
        
        $url = $this->get('router')->generate(
            'PageBundle_tagged_full',
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
    public function getTagFilterTitles($selectedTagsArray)
    {          
        $tags = array();
            
        if(!empty($selectedTagsArray))
        {
            foreach($selectedTagsArray as $selectedTagEntity)
            {
                $tags[] = $selectedTagEntity->getTitle();   
            }
        }
        
        $filterTags = implode(',', $tags);
        
        if(empty($filterTags))
        {
            $filterTags = 'all';
        }   
        
        return $filterTags;
    }
    
    
    // Sort homepage intros by the pageOrder value of the objects returned after the merge
    public function sortHomepageItemsCompare($introItemA, $introItemB)
    {
        if ($introItemA->getPageOrder() == $introItemB->getPageOrder()) {
            return 0;
        }
        return ($introItemA->getPageOrder() < $introItemB->getPageOrder()) ? -1 : 1;
    }
    
    // Check for mobile 
    public function isMobile()
    {
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent,0,4)))
        {
            return true;
        }
        else
        {
            return false;            
        }
    }
    
}