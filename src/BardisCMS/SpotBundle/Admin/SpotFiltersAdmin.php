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


class SpotFiltersAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {                   
        // Getting the container parameters set in the config file that exist
        $pageSettings = $this->getConfigurationPool()->getContainer()->getParameter('spots_settings');
        
        // Setting up the available filter categories and preffered choice
        $filtercategoriesChoices       = $pageSettings['filtercategories'];
        
        $formMapper
            ->with('Spot Filter Details', array('collapsed' => false))
                ->add('title', null, array('label' => 'Spot Filter Title', 'required' => true))
                ->add('filterCategory', 'choice', array('choices' => $filtercategoriesChoices, 'label' => 'Spot Filter Category', 'required' => false))              
                ->add('filterIcon', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'icons', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Spot Filter Icon', 'required' => false))
                ->setHelps(array(
                    'title'             => 'Set the title of the Spot Filter',
                    'filterCategory'    => 'Set the category of the Spot Filter',
                    'filterIcon'		=> 'Set the icon of the Spot Filter'
                ))
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
                
        // Getting the container parameters set in the config file that exist
        $pageSettings           = $this->getConfigurationPool()->getContainer()->getParameter('spots_settings');
        
        // Setting up the available filter categories and preffered choice
        $filtercategoriesChoices   = $pageSettings['tagcategories'];
        
        $datagridMapper
            ->add('title')
            ->add('filterCategory', 'doctrine_orm_string', array(), 'choice', array('choices' => $filtercategoriesChoices))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->addIdentifier('filterCategoryAsString', null, array('sortable' => false, 'label' => 'Spot Filter Category'))
            ->addIdentifier('filterIcon')
            ->add('_action', 'actions', array( 
                    'actions' => array(  
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
        ;
    }
    
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('edit', $this->getRouterIdParameter().'/edit');
        $collection->add('delete', $this->getRouterIdParameter().'/delete');
    }

}