<?php

/*
 * Spot Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\SpotBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Form\Type;


class SpotAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {        
        // Getting the container parameters set in the config file that exist
        $spotsSettings = $this->getConfigurationPool()->getContainer()->getParameter('spots_settings');
        
        // Setting up the available page types and preffered choice
        $pagetypeChoices            = $spotsSettings['pagetypes'];
        reset($pagetypeChoices);
        $prefPagetypeChoice         = key($pagetypeChoices);
        
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
                    'pagetype'      => 'Select the type of the Page (Spot Page template)'
                ))
            ->end()
            ->with('Filters & Destinations', array('collapsed' => true))
                ->add('relatedDestination', 'entity', array('class' => 'BardisCMS\DestinationBundle\Entity\Destination', 'property' => 'title', 'expanded' => false, 'multiple' => false, 'label' => 'Select Related Destination', 'attr' => array('class' => 'autoCompleteItems autoCompleteSpot', 'data-sonata-select2' => 'false'), 'required' => false))
                ->add('spotDestinationFilters', 'entity', array('class' => 'BardisCMS\SpotBundle\Entity\SpotDestinationFilter', 'property' => 'title', 'expanded' => true, 'multiple' => true, 'label' => 'Associated Destination Categories', 'required' => false))
                ->add('spotFilters', 'entity', array('class' => 'BardisCMS\SpotBundle\Entity\SpotFilter', 'property' => 'title', 'expanded' => true, 'multiple' => true, 'label' => 'Spot Filters', 'required' => false))                
                ->setHelps(array(
                    'spotFilters'				=> 'Select the associated filters',
                    'spotDestinationFilters'	=> 'Select the associated destinations'
                ))            
            ->end()
            ->with('Homepage & Listing Page Intro', array('collapsed' => true))
                ->add('introtext', 'textarea', array('attr' => array('class' => 'tinymce', 'data-theme' => 'advanced'), 'label' => 'Intro Text/HTML', 'required' => false))
                ->add('introimage', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'spotlist', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Intro Image', 'required' => false))
                ->add('pageOrder', null, array('label' => 'Intro Item Ordering in Homepage', 'required' => true))
                ->add('introclass', null, array('label' => 'Intro Item CSS Class', 'required' => false))
                ->setHelps(array(
                    'introtext'     => 'Set the Text/HTML content to display for intro listing items',
                    'introimage'    => 'Set the Image content to display for intro listing items',
                    'pageOrder'     => 'Set the order of this Spot page intro for the homepage',
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
                case 'spot_article':
                $formMapper                          
                        ->with('Spot Specific Information', array('collapsed' => true))
                            ->add('showPageTitle', 'choice', array('choices' => array('0' => 'Hide Title', '1' => 'Show Title'), 'preferred_choices' => array('1'), 'label' => 'Title Display', 'required' => true))
							->add('summary', 'textarea', array('attr' => array('class' => 'tinymce', 'data-theme' => 'advanced'), 'label' => 'Spot Description', 'required' => false))
                            ->add('spotOrder', null, array('label' => 'Spot Item Ordering', 'required' => false))
                            ->add('pageclass', null, array('label' => 'Spot Page CSS Class', 'required' => false))
                            ->add('mapLongitude', null, array('label' => 'Spot Map Longitude', 'required' => false))
                            ->add('mapLatitude', null, array('label' => 'Spot Map Latitude', 'required' => false))
                            ->add('pageclass', null, array('label' => 'Spot Page CSS Class', 'required' => false))
							->add('featuredSpot', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Featured Spot', 'required' => true))                
                        ->setHelps(array(
                                'showPageTitle'         => 'Hide / Show The title of the page',
                                'summary'               => 'Set the Spot Description',               
                                'featuredSpot'          => 'Featured Spot is visible in homepage',                                
                                'spotOrder'				=> 'Set the order of this Spot when listed amonst the rest',
                                'pageclass'             => 'Set the Color CSS class for this Spot',
                                'mapLongitude'			=> 'Set Google map position Longitude',
                                'mapLatitude'           => 'Set Google map position Latitude'
                        ))
                        ->end()                     
                        ->with('Spot Characteristics', array('collapsed' => true))
                            ->add('spotAttributes','spotattributes', array('attr' => array('class' => 'spotattributes'), 'label' => 'Spot Attributes'))
                        ->end() 
						->with('Spot Page Contents', array('collapsed' => true))
                            ->add('bannercontentblocks','contentblockcollection', array('attr' => array('class' => 'bannercontentblocks'), 'label' => 'Contents For Top Banner'))
                            ->add('maincontentblocks','contentblockcollection', array('attr' => array('class' => 'maincontentblocks'), 'label' => 'Contents Below Spot Description')) 
                            ->add('secondarycontentblocks','contentblockcollection', array('attr' => array('class' => 'secondarycontentblocks'), 'label' => 'Contents Below Weather'))
                            //->add('modalcontentblocks','contentblockcollection', array('attr' => array('class' => 'modalcontentblocks'), 'label' => 'Modal Window Contents')) 
                            ->setHelps(array(
                                'maincontentblocks'         => 'Enter contents Below Spot Description',
                                'secondarycontentblocks'    => 'Enter contents Below Weather',
                                'bannercontentblocks'		=> 'Enter contents for Top Banner'
                            //    'modalcontentblocks'        => 'Enter the contents for Modal Window'
                            )) 
                        ->end()
                    ;
                    break;
                default:
                $formMapper
                        ->with('Page Specific Information', array('collapsed' => true))
                            ->add('showPageTitle', 'choice', array('choices' => array('0' => 'Hide Title', '1' => 'Show Title'), 'preferred_choices' => array('1'), 'label' => 'Title Display', 'required' => true))
                            ->add('summary', 'textarea', array('attr' => array('class' => 'tinymce', 'data-theme' => 'advanced'), 'label' => 'Spot Description', 'required' => false))
                            ->add('pageclass', null, array('label' => 'Spot Page CSS Class', 'required' => false))
                        ->setHelps(array(
                                'showPageTitle'     => 'Hide / Show The title of the page',
                                'summary'           => 'Set the Page Description',
								'pageclass'         => 'Set the CSS class for this page'
                        ))
                        ->end()  
                        ->with('Spot List Page Contents', array('collapsed' => true))
                            ->add('maincontentblocks','contentblockcollection', array('attr' => array('class' => 'maincontentblocks'), 'label' => 'Contents above the Spot List'))
                            ->add('secondarycontentblocks','contentblockcollection', array('attr' => array('class' => 'maincontentblocks'), 'label' => 'Contents below the Spot List'))
                            ->setHelps(array(
                                'maincontentblocks'         => 'Select the contents in the order you want them to appear above the Spot list',
                                'secondarycontentblocks'    => 'Select the contents in the order you want them to appear below the Spot list'
                            )) 
                        ->end() 
                    ;
            } 
        }  
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        // Getting the container parameters set in the config file that exist
        $spotsSettings = $this->getConfigurationPool()->getContainer()->getParameter('spots_settings');
        
        // Setting up the available page types and preffered choice
        $pagetypeChoices = $spotsSettings['pagetypes'];
        
        $datagridMapper
            ->add('title')
            ->add('publishState', 'doctrine_orm_string', array(), 'choice', array('choices' => array('0' => 'Unpublished', '1' => 'Published', '2' => 'Preview')))
            ->add('pagetype', 'doctrine_orm_string', array(), 'choice', array('choices' => $pagetypeChoices))
            ->add('spotDestinationFilters')
            ->add('spotFilters')
            ->add('featuredSpot', 'doctrine_orm_string', array(), 'choice', array('choices' => array('0' => 'No', '1' => 'Yes')))
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
            ->addIdentifier('relatedDestination')
            ->addIdentifier('spotDestinationFilters')
            ->addIdentifier('spotFilters')
            ->addIdentifier('featuredSpotAsString', null, array('sortable' => false, 'label' => 'Featured Spot'))
            ->addIdentifier('pageOrder')
            ->addIdentifier('spotOrder')
            ->addIdentifier('author')
            ->addIdentifier('date')
            ->add('_action', 'actions', array( 
                    'actions' => array(  
                        'duplicate' => array(
                            'template' => 'SpotBundle:Admin:duplicate.html.twig'
                        ),
                        'edit' => array(
                            'template' => 'SpotBundle:Admin:edit.html.twig'
                        ),
                        'delete' => array(
                            'template' => 'SpotBundle:Admin:delete.html.twig'
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