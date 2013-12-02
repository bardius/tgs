<?php 
/*
 * Product Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\ProductBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Form\Type;


class ProductAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {        
        // Getting the container parameters set in the config file that exist
        $productSettings = $this->getConfigurationPool()->getContainer()->getParameter('product_settings');
        
        // Setting up the available page types and preffered choice
        $pagetypeChoices            = $productSettings['pagetypes'];
        reset($pagetypeChoices);
        $prefPagetypeChoice         = key($pagetypeChoices);

        // Setting up the available media sizes and preffered choice
        //$introMediaSizeChoices      = $productSettings['mediasizes'];
        //reset($introMediaSizeChoices);
        //$prefIntroMediaSizeChoice   = key($introMediaSizeChoices);
        
        // Getting the container services that exist and then the user roles
        $loggedUser     = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $loggedUserRole = $loggedUser->getRoles();
        
        $formMapper
            ->with('Page Essential Details', array('collapsed' => false))
                ->add('title', null, array('attr' => array('class' => 'pageTitleField'), 'label' => 'Page Title', 'required' => true))
                ->add('publishState', 'choice', array('choices' => array('0' => 'Unpublished', '1' => 'Published', '2' => 'Preview'), 'preferred_choices' => array('2'), 'label' => 'Publish Status', 'required' => true))
                ->add('date', 'date', array('widget' => 'single_text', 'format' => 'dd-MM-yyyy', 'attr' => array('class' => 'datepicker'), 'label' => 'Publish Date', 'required' => true))
		->add('author',  'entity', array('class' => 'Application\Sonata\UserBundle\Entity\User', 'property' => 'username', 'expanded' => false, 'multiple' => false, 'label' => 'Author', 'data' => $loggedUser->getUsername(), 'required' => true))
                ->add('alias', null, array('attr' => array('class' => 'pageAliasField'), 'label' => 'Page Alias', 'required' => false))
                ->add('pagetype', 'choice', array('choices' => $pagetypeChoices, 'preferred_choices' => array($prefPagetypeChoice), 'label' => 'Page Type', 'required' => true))              
                ->setHelps(array(
                    'title'         => 'Set the title',
                    'publishState'  => 'Set the publish status',
                    'date'          => 'Set the publishing date',
                    'author'        => 'Select the Author ( '.$loggedUserRole[0].' )',
                    'alias'         => 'Set the URL alias',
                    'pagetype'      => 'Select the type of the Page (Product Page template)'
                ))
            ->end()
            ->with('Categories & Tags', array('collapsed' => true))
                ->add('categories', 'entity', array('class' => 'BardisCMS\ProductBundle\Entity\ProductCategory', 'property' => 'title', 'expanded' => true, 'multiple' => true, 'label' => 'Associated Categories', 'required' => false))
                ->add('tags', 'entity', array('class' => 'BardisCMS\ProductBundle\Entity\ProductTag', 'property' => 'title', 'expanded' => true, 'multiple' => true, 'label' => 'Associated Tags', 'required' => false))                
                ->setHelps(array(
                    'tags'          => 'Select the associated tags',
                    'categories'    => 'Select the associated categories'
                ))            
            ->end()
            ->with('Homepage & Listing Page Intro', array('collapsed' => true))
                ->add('introtext', 'textarea', array('attr' => array('class' => 'tinymce', 'data-theme' => 'advanced'), 'label' => 'Intro Text/HTML', 'required' => false))
                ->add('introimage', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'intro', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Intro Image', 'required' => false))
                //->add('intromediasize', 'choice', array('choices' => $introMediaSizeChoices, 'preferred_choices' => array($prefIntroMediaSizeChoice), 'label' => 'Media Size', 'required' => true))
                ->add('introvideo', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.youtube', 'context' => 'intro', 'attr' => array( 'class' => 'videofield'), 'label' => 'YouTube Video Id', 'required' => false))
                ->add('pageOrder', null, array('label' => 'Intro Item Ordering in Homepage', 'required' => true))
                ->add('introclass', null, array('label' => 'Intro Item CSS Class', 'required' => false))
                ->setHelps(array(
                    'introtext'     => 'Set the Text/HTML content to display for intro listing items',
                    'introimage'    => 'Set the Image content to display for intro listing items',
                    'introvideo'    => 'Set the video content to display for intro listing items',
                    'pageOrder'     => 'Set the order of this Product page intro for the homepage',
                    'introclass'    => 'Set the CSS class that wraps content to display for intro listing items'
                ))
            ->end()
            ->with('Page Metatags Manual Override', array('collapsed' => true))
                ->add('keywords', null, array('label' => 'Meta Keywords', 'required' => false))
                ->add('description', null, array('label' => 'Meta Description', 'required' => false))
                ->setHelps(array(
                    'keywords'      => 'Set the keyword metadata of the page of leave empty to autogenerate',
                    'description'   => 'Set the description metadata of the page of leave empty to autogenerate'
                ))
            ->end()
        ;
        
        // Check if it is a new entry. If it is hide the content block management
        if(!is_null($this->getSubject()->getId()))
        {
            // Setting up the available content block holders for each pagetype
            switch ($this->subject->getPagetype()) {
                case 'product_article':
                $formMapper                          
                        ->with('Product Specific Information', array('collapsed' => true))
                            ->add('showPageTitle', 'choice', array('choices' => array('0' => 'Hide Title', '1' => 'Show Title'), 'preferred_choices' => array('1'), 'label' => 'Title Display', 'required' => true))
                            ->add('summary', 'textarea', array('attr' => array('class' => 'tinymce', 'data-theme' => 'advanced'), 'label' => 'Product Description', 'required' => false))
                            ->add('productimage', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'product', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Product Image', 'required' => false))
                            ->add('bgimage', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'bgimage', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Product Top Background Image', 'required' => false))
                            ->add('productlistimage', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'productlist', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Product Listing Image', 'required' => false))
                            ->add('topArrowText', null, array('label' => 'Top Arrow Text', 'required' => false))
                            //->add('productsRange', null, array('label' => 'Range', 'required' => false))
                            ->add('packageSize1', null, array('label' => 'Package Size 1', 'required' => false))
                            ->add('manufacturersPartNo1', null, array('label' => 'ManufacturersPartNo for package 1', 'required' => false))
                            ->add('packageSize2', null, array('label' => 'Package Size 2', 'required' => false))
                            ->add('manufacturersPartNo2', null, array('label' => 'ManufacturersPartNo for package 2', 'required' => false))
                            ->add('packageSize3', null, array('label' => 'Package Size 3', 'required' => false))
                            ->add('manufacturersPartNo3', null, array('label' => 'ManufacturersPartNo for package 3', 'required' => false))
                            ->add('displayFairtrade', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Fairtrade product', 'required' => false))
                            ->add('displayInRange', 'choice', array('choices' => array('0' => 'Hide', '1' => 'Show'), 'preferred_choices' => array('1'), 'label' => 'Display in product range', 'required' => false))
                            ->add('productOrder', null, array('label' => 'Product Item Ordering', 'required' => false))
                            ->add('pageclass', null, array('label' => 'Product Page CSS Class', 'required' => false))
                        ->setHelps(array(
                                'showPageTitle'         => 'Hide / Show The title of the page',
                                'summary'               => 'Set the Product Description',
                                'productimage'          => 'Set the Product Image',
                                'bgimage'               => 'Set the Product Top Background Image',
                                'productlistimage'      => 'Set the Product Image',
                                'topArrowText'          => 'Top Right Arrow Text',
                                //'productsRange'         => 'Product Range Name',
                                'packageSize1'          => 'Package size copy for package 1',
                                'manufacturersPartNo1'  => 'ManufacturersPartNo for Buy Now API (package 1)',
                                'packageSize2'          => 'Package size copy for package 2',
                                'manufacturersPartNo2'  => 'ManufacturersPartNo for Buy Now API (package 2)',
                                'packageSize3'          => 'Package size copy for package 3',
                                'manufacturersPartNo3'  => 'ManufacturersPartNo for Buy Now API (package 3)',
                                'displayFairtrade'      => 'Hide / Show The Fairtrade atttibute',
                                'displayInRange'        => 'Hide / Show The Product from range list',
                                'productOrder'          => 'Set the order of this Product when listed amonst the rest',
                                'pageclass'             => 'Set the Color CSS class for this Product'
                        ))
                        ->end()                    
                        ->with('Product Page Contents', array('collapsed' => true))
                            ->add('maincontentblocks','contentblockcollection', array('attr' => array('class' => 'maincontentblocks'), 'label' => 'Contents Below Product Description')) 
                            ->add('secondarycontentblocks','contentblockcollection', array('attr' => array('class' => 'secondarycontentblocks'), 'label' => 'Contents Above Product Range'))
                            ->add('modalcontentblocks','contentblockcollection', array('attr' => array('class' => 'modalcontentblocks'), 'label' => 'Product Nutritional Information')) 
                            ->setHelps(array(
                                'maincontentblocks'         => 'Enter contents Below Product Description',
                                'secondarycontentblocks'    => 'Enter contents Above Product Range',
                                'modalcontentblocks'        => 'Enter the contents for the Nutritional Information'
                            )) 
                        ->end() 
                    ;
                    break;
                default:
                $formMapper
                        ->with('Page Specific Information', array('collapsed' => true))
                            ->add('showPageTitle', 'choice', array('choices' => array('0' => 'Hide Title', '1' => 'Show Title'), 'preferred_choices' => array('1'), 'label' => 'Title Display', 'required' => true))
                            ->add('summary', 'textarea', array('attr' => array('class' => 'tinymce', 'data-theme' => 'advanced'), 'label' => 'Product Description', 'required' => false))
                            ->add('bgimage', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'bgimage', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Destination Top Background Image', 'required' => false))
                            ->add('topArrowText', null, array('label' => 'Top Arrow Text', 'required' => false))
                            ->add('featuredProduct', 'entity', array('class' => 'BardisCMS\ProductBundle\Entity\Product', 'property' => 'title', 'expanded' => false, 'multiple' => false, 'label' => 'Select Featured Product', 'attr' => array('class' => 'autoCompleteItems autoCompleteProduct'), 'required' => false))
                            ->add('pageclass', null, array('label' => 'Product Page CSS Class', 'required' => false))
                        ->setHelps(array(
                                'showPageTitle'     => 'Hide / Show The title of the page',
                                'bgimage'           => 'Set the Page Top Background Image',
                                'featuredProduct'   => 'Set the Featured product',
                                'summary'           => 'Set the Page Description',
                                'topArrowText'      => 'Top Right Arrow Text',
                                'pageclass'         => 'Set the CSS class for this page'
                        ))
                        ->end()  
                        ->with('Product List Page Contents', array('collapsed' => true))
                            ->add('maincontentblocks','contentblockcollection', array('attr' => array('class' => 'maincontentblocks'), 'label' => 'Contents above the Product List'))
                            ->add('secondarycontentblocks','contentblockcollection', array('attr' => array('class' => 'maincontentblocks'), 'label' => 'Contents below the Product List'))  
                            ->add('modalcontentblocks','contentblockcollection', array('attr' => array('class' => 'modalcontentblocks'), 'label' => 'Modal Windows Contents')) 
                            ->setHelps(array(
                                'maincontentblocks'         => 'Select the contents in the order you want them to appear above the Product list',
                                'secondarycontentblocks'    => 'Select the contents in the order you want them to appear below the Product list',
                                'modalcontentblocks'        => 'Enter the contents for the Modal Box'
                            )) 
                        ->end() 
                    ;
            } 
        }  
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        // Getting the container parameters set in the config file that exist
        $productSettings = $this->getConfigurationPool()->getContainer()->getParameter('product_settings');
        
        // Setting up the available page types and preffered choice
        $pagetypeChoices = $productSettings['pagetypes'];
        
        $datagridMapper
            ->add('title')
            ->add('publishState', 'doctrine_orm_string', array(), 'choice', array('choices' => array('0' => 'Unpublished', '1' => 'Published', '2' => 'Preview')))
            ->add('pagetype', 'doctrine_orm_string', array(), 'choice', array('choices' => $pagetypeChoices))
            ->add('categories')
            ->add('tags')
            ->add('author')
            ->add('date', 'doctrine_orm_date_range', array('input_type' => 'date'));
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->addIdentifier('alias')
            ->addIdentifier('publishStateAsString', null, array('sortable' => false, 'label' => 'Publish State'))
            ->addIdentifier('pagetypeAsString', null, array('sortable' => false, 'label' => 'Page Type'))
            ->addIdentifier('categories')
            ->addIdentifier('tags')
            ->addIdentifier('pageOrder')
            ->addIdentifier('productOrder')
            ->addIdentifier('author')
            ->addIdentifier('date')
            ->add('_action', 'actions', array( 
                    'actions' => array(  
                        'duplicate' => array(
                            'template' => 'ProductBundle:Admin:duplicate.html.twig'
                        ),
                        'edit' => array(
                            'template' => 'ProductBundle:Admin:edit.html.twig'
                        ),
                        'delete' => array(
                            'template' => 'ProductBundle:Admin:delete.html.twig'
                        )
                    )
                ))
        ;
    }

    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
            ->with('title')
                ->assertLength(array('max' => 255))
                ->assertNotBlank()
                ->assertNotNull()
            ->end()
                
            ->with('author')
                ->assertLength(array('max' => 255))
                ->assertNotBlank()
                ->assertNotNull()
            ->end()
        ;
    }
    
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('duplicate', $this->getRouterIdParameter().'/duplicate');
        $collection->add('edit', $this->getRouterIdParameter().'/edit');
        $collection->add('delete', $this->getRouterIdParameter().'/delete');
    }

}