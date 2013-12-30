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


class DestinationCategoriesAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {        
        $formMapper
            ->with('Category Details', array('collapsed' => false))
                ->add('title', null, array('label' => 'Category Title', 'required' => true))
				->add('destinationListPage', 'entity', array('auto_initialize' => false, 'class' => 'BardisCMS\DestinationBundle\Entity\Destination', 'property' => 'title', 'expanded' => false, 'multiple' => false, 'label' => 'Destination List Page', 'attr' => array('class' => 'autoCompleteItems autoCompleteDestination'), 'required' => false))                
                ->add('class', null, array('label' => 'Intro Item CSS Class', 'required' => false))
                ->add('icon', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'icons', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Category Icon', 'required' => false))
                ->setHelps(array(
                    'title'					=> 'Set the title of the category',
                    'destinationListPage'	=> 'Select the destination category list page',
                    'class'					=> 'Set the css class that applies to the category items',
                    'icon'					=> 'Set the icon of the of the category'
                ))
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->addIdentifier('destinationListPage')
            ->addIdentifier('class')
            ->addIdentifier('icon')
            ->add('_action', 'actions', array( 
                    'actions' => array(  
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
        ;
    }
    
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('edit', $this->getRouterIdParameter().'/edit');
        $collection->add('delete', $this->getRouterIdParameter().'/delete');
    }

}