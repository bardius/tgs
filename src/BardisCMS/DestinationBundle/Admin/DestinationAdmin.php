<?php 
/*
 * Destination Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\DestinationBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Form\Type;


class DestinationAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {        
        // Getting the container parameters set in the config file that exist
        $destinationSettings = $this->getConfigurationPool()->getContainer()->getParameter('destination_settings');
        
        // Setting up the available page types and preffered choice
        $pagetypeChoices            = $destinationSettings['pagetypes'];
        reset($pagetypeChoices);
        $prefPagetypeChoice         = key($pagetypeChoices);

        // Setting up the available media sizes and preffered choice
        //$introMediaSizeChoices      = $destinationSettings['mediasizes'];
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
                    'publishState'  => 'Set the publish',
                    'date'          => 'Set the publishing date',
                    'author'        => 'Select the Author ( '.$loggedUserRole[0].' )',
                    'alias'         => 'Set the URL alias of the Page',
                    'pagetype'      => 'Select the type of the Page (Destination Page template)'
                ))
            ->end()
            ->with('Categories & Tags', array('collapsed' => true))
                ->add('categories', 'entity', array('class' => 'BardisCMS\DestinationBundle\Entity\DestinationCategory', 'property' => 'title', 'expanded' => true, 'multiple' => true, 'label' => 'Associated Categories', 'required' => false))
                ->add('tags', 'entity', array('class' => 'BardisCMS\DestinationBundle\Entity\DestinationTag', 'property' => 'title', 'expanded' => true, 'multiple' => true, 'label' => 'Associated Tags', 'required' => false))                
                ->setHelps(array(
                    'tags'          => 'Select the associated tags',
                    'categories'    => 'Select the associated categories'
                ))            
            ->end()
            ->with('Homepage & Listing Page Intro', array('collapsed' => true))
                ->add('introtext', 'textarea', array('attr' => array('class' => 'tinymce', 'data-theme' => 'advanced'), 'label' => 'Intro Text/HTML', 'required' => false))                          
                ->add('introimage', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'intro', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Intro Image for Homepage', 'required' => false))
                ->add('introvideo', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.youtube', 'context' => 'intro', 'attr' => array( 'class' => 'videofield'), 'label' => 'YouTube Video Id', 'required' => false))
                ->add('pageOrder', null, array('label' => 'Intro Item Ordering in Homepage', 'required' => true))
                ->add('introclass', null, array('label' => 'Intro Item CSS Class', 'required' => false))
                ->setHelps(array(
                    'introtext'     => 'Set the Text/HTML content to display for intro listing items',
                    'introimage'    => 'Set the Intro Image to display for homepage listing items',
                    'introvideo'    => 'Set the video content to display for intro listing items',
                    'pageOrder'     => 'Set the order of this Destination page intro for the homepage',
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
                case 'destination_article':
                $formMapper                        
                        ->with('Destination Specific Information', array('collapsed' => true))
                            ->add('showPageTitle', 'choice', array('choices' => array('0' => 'Hide Title', '1' => 'Show Title'), 'preferred_choices' => array('1'), 'label' => 'Title Display', 'required' => true))
                            ->add('summary', 'textarea', array('attr' => array('class' => 'tinymce', 'data-theme' => 'advanced'), 'label' => 'Destination Description', 'required' => false))
                            ->add('destinationimage', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'destination', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Destination Image', 'required' => false))
                            ->add('bgimage', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'bgimage', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Destination Top Background Image', 'required' => false))
                            ->add('preperation', null, array('label' => 'Preperation Time', 'required' => false))
                            ->add('cooking', null, array('label' => 'Cooking Time', 'required' => false))
                            ->add('servings', null, array('label' => 'Total Servings', 'required' => false))
                            ->add('pageclass', null, array('label' => 'Destination Page CSS Class', 'required' => false))
                            ->add('product', 'entity', array('class' => 'BardisCMS\ProductBundle\Entity\Product', 'property' => 'title', 'expanded' => false, 'multiple' => false, 'label' => 'Select Related Product', 'attr' => array('class' => 'autoCompleteItems autoCompleteProduct'), 'required' => false))
                        ->setHelps(array(
                                'showPageTitle' => 'Hide / Show The title of the page',
                                'summary'       => 'Set the Destination Description',
                                'destinationimage'   => 'Set the Destination Image',
                                'bgimage'       => 'Set the Destination Top Background Image',
                                'preperation'   => 'Set the Preperation Time',
                                'cooking'       => 'Set the Cooking Time',
                                'servings'      => 'Set the Total Servings',
                                'pageclass'     => 'Set the Color CSS class for this Destination',
                                'product'       => 'Select the related Product for this Destination'
                        ))
                        ->end()
                        ->with('Destination Page Contents', array('collapsed' => true))
                            ->add('maincontentblocks','contentblockcollection', array('attr' => array('class' => 'maincontentblocks'), 'label' => 'Destination Instructions')) 
                            ->add('secondarycontentblocks','contentblockcollection', array('attr' => array('class' => 'maincontentblocks'), 'label' => 'Destination Ingredients')) 
                            //->add('extracontentblocks','contentblockcollection', array('attr' => array('class' => 'maincontentblocks'), 'label' => 'Destination extras')) 
                            ->add('modalcontentblocks','contentblockcollection', array('attr' => array('class' => 'modalcontentblocks'), 'label' => 'Destination Nutritional Information'))
                            //->add('bannercontentblocks','contentblockcollection', array('attr' => array('class' => 'bannercontentblocks'), 'label' => 'Bottom Contents'))
                            ->setHelps(array(
                                //'bannercontentblocks'       => 'Select the top contents in the order you want them to appear in the Destination Page',
                                //'extracontentblocks'        => 'Select the top contents in the order you want them to appear in the Destination Page',
                                'maincontentblocks'         => 'Enter the contents for the Destination Instructions',
                                'secondarycontentblocks'    => 'Enter the contents for the Destination Ingredients',
                                'modalcontentblocks'        => 'Enter the contents for the Nutritional Information'
                            )) 
                        ->end() 
                    ;
                    break;
                default:
                $formMapper
                        ->with('Page Specific Information', array('collapsed' => true))
                            ->add('showPageTitle', 'choice', array('choices' => array('0' => 'Hide Title', '1' => 'Show Title'), 'preferred_choices' => array('1'), 'label' => 'Title Display', 'required' => true))
                            ->add('summary', 'textarea', array('attr' => array('class' => 'tinymce', 'data-theme' => 'advanced'), 'label' => 'Category Description', 'required' => false))
                            ->add('destinationimage', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'destination', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Intro Image', 'required' => false))
                            ->add('bgimage', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'bgimage', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Top Background Image', 'required' => false))
                            //->add('intromediasize', 'choice', array('choices' => $introMediaSizeChoices, 'preferred_choices' => array($prefIntroMediaSizeChoice), 'label' => 'Media Size', 'required' => true))
                            ->add('preperation', null, array('label' => 'Featured Destination Url', 'required' => false))
                            ->add('cooking', null, array('label' => 'Featured Destination Playfull Copy', 'required' => false))
                            ->add('pageclass', null, array('label' => 'Destination Page CSS Class', 'required' => false))
                        ->setHelps(array(
                                'showPageTitle' => 'Hide / Show The title of the page',
                                'summary'       => 'Set the Category Description',
                                'destinationimage'   => 'Set the Image content to display for intro listing items',
                                'bgimage'       => 'Set the Top Background Image',
                                'preperation'   => 'Set the Featured Destination Url',
                                'cooking'       => 'Set the Featured Destination Playfull Copy',
                                'pageclass'     => 'Set the CSS class for this page'
                        ))
                        ->end()
                        ->with('Destination List Page Contents', array('collapsed' => true))
                            ->add('maincontentblocks','contentblockcollection', array('attr' => array('class' => 'maincontentblocks'), 'label' => 'Contents above the Destination List'))
                            ->add('secondarycontentblocks','contentblockcollection', array('attr' => array('class' => 'maincontentblocks'), 'label' => 'Contents below the Destination List'))  
                            ->add('modalcontentblocks','contentblockcollection', array('attr' => array('class' => 'modalcontentblocks'), 'label' => 'Modal Windows Contents')) 
                            ->setHelps(array(
                                'maincontentblocks'         => 'Select the contents in the order you want them to appear above the destination list',
                                'secondarycontentblocks'    => 'Select the contents in the order you want them to appear below the destination list',
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
        $destinationSettings = $this->getConfigurationPool()->getContainer()->getParameter('destination_settings');
        
        // Setting up the available page types and preffered choice
        $pagetypeChoices            = $destinationSettings['pagetypes'];
        
        $datagridMapper
            ->add('title')
            ->add('publishState', 'doctrine_orm_string', array(), 'choice', array('choices' => array('0' => 'Unpublished', '1' => 'Published', '2' => 'Preview')))
            ->add('pagetype', 'doctrine_orm_string', array(), 'choice', array('choices' => $pagetypeChoices))
            ->add('categories')
            ->add('tags')
            ->add('product')
            ->add('author')
            //->add('date', 'doctrine_orm_date_range', array('input_type' => 'date'));
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
            ->addIdentifier('product')
            ->addIdentifier('pageOrder')
            ->addIdentifier('author')
            ->addIdentifier('date')
            ->add('_action', 'actions', array( 
                    'actions' => array(  
                        'duplicate' => array(
                            'template' => 'DestinationBundle:Admin:duplicate.html.twig'
                        ),
                        'edit' => array(
                            'template' => 'DestinationBundle:Admin:edit.html.twig'
                        ),
                        'delete' => array(
                            'template' => 'DestinationBundle:Admin:delete.html.twig'
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