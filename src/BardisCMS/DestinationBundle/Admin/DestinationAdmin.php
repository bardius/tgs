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
                    'title'         => 'Set the title of the page',
                    'publishState'  => 'Set the publish state of the page',
                    'date'          => 'Set the publishing date',
                    'author'        => 'Select the Author ( '.$loggedUserRole[0].' )',
                    'alias'         => 'Set the URL alias of the Page',
                    'pagetype'      => 'Select the type of the Page (Destination Page Template)'
                ))
            ->end()
            ->with('Categories & Tags', array('collapsed' => true))
                ->add('categories', 'entity', array('class' => 'BardisCMS\DestinationBundle\Entity\DestinationCategory', 'property' => 'title', 'expanded' => true, 'multiple' => true, 'label' => 'Destination Categories', 'required' => false))
                //->add('tags', 'entity', array('class' => 'BardisCMS\DestinationBundle\Entity\DestinationTag', 'property' => 'title', 'expanded' => true, 'multiple' => true, 'label' => 'Associated Tags', 'required' => false))                
                ->setHelps(array(
                    //'tags'          => 'Select the associated tags',
                    'categories'    => 'Select the associated destination categories'
                ))            
            ->end()
            ->with('Listing Page Intro', array('collapsed' => true))
                ->add('introtext', 'textarea', array('attr' => array('class' => 'tinymce', 'data-theme' => 'advanced'), 'label' => 'Intro Text/HTML', 'required' => false))                          
                ->add('introimage', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'intro', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Intro Image', 'required' => false))
                ->add('pageOrder', null, array('label' => 'Intro Item Ordering', 'required' => true))
                ->add('introclass', null, array('label' => 'Intro Item CSS Class', 'required' => false))
                ->setHelps(array(
                    'introtext'     => 'Set the Text/HTML content to display for intro listing items',
                    'introimage'    => 'Set the Intro Image to display for listing items',
                    'pageOrder'     => 'Set the order for listing items',
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
                            ->add('pageclass', null, array('label' => 'Page CSS Class', 'required' => false))
                        ->setHelps(array(
                                'showPageTitle' => 'Hide / Show The title of the page',
                                'summary'       => 'Set the Destination Description',
                                'pageclass'     => 'Set the Color CSS class for this Destination'
                        ))
                        ->end()
                        ->with('Destination Page Contents', array('collapsed' => true))
                            ->add('bannercontentblocks','contentblockcollection', array('attr' => array('class' => 'bannercontentblocks'), 'label' => 'Top Banner Contents'))
                            ->add('maincontentblocks','contentblockcollection', array('attr' => array('class' => 'maincontentblocks'), 'label' => 'Contents Below Description'))
                            ->add('secondarycontentblocks','contentblockcollection', array('attr' => array('class' => 'secondarycontentblocks'), 'label' => 'Contents Below The Spot List')) 
                            ->add('modalcontentblocks','contentblockcollection', array('attr' => array('class' => 'modalcontentblocks'), 'label' => 'Modal Contents'))
                        ->end() 
                    ;
                    break;
                default:
                $formMapper
                        ->with('Page Specific Information', array('collapsed' => true))
                            ->add('showPageTitle', 'choice', array('choices' => array('0' => 'Hide Title', '1' => 'Show Title'), 'preferred_choices' => array('1'), 'label' => 'Title Display', 'required' => true))
                            ->add('summary', 'textarea', array('attr' => array('class' => 'tinymce', 'data-theme' => 'advanced'), 'label' => 'Destination Description', 'required' => false))
                            ->add('pageclass', null, array('label' => 'Page CSS Class', 'required' => false))
                        ->setHelps(array(
                                'showPageTitle' => 'Hide / Show The title of the page',
                                'summary'       => 'Set the Destination Description',
                                'pageclass'     => 'Set the CSS class for this page'
                        ))
                        ->end()
                        ->with('Destination List Page Contents', array('collapsed' => true))
                            ->add('bannercontentblocks','contentblockcollection', array('attr' => array('class' => 'bannercontentblocks'), 'label' => 'Top Banner Contents'))
                            ->add('maincontentblocks','contentblockcollection', array('attr' => array('class' => 'maincontentblocks'), 'label' => 'Contents Below Description'))
                            ->add('secondarycontentblocks','contentblockcollection', array('attr' => array('class' => 'secondarycontentblocks'), 'label' => 'Contents Below The Destination List')) 
                            ->add('modalcontentblocks','contentblockcollection', array('attr' => array('class' => 'modalcontentblocks'), 'label' => 'Modal Contents'))
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