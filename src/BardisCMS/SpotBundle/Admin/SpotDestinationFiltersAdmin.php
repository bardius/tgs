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


class SpotDestinationFiltersAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {        
        $formMapper
            ->with('Spot Destination Filter Details', array('collapsed' => false))
                ->add('title', null, array('label' => 'Destination Title', 'required' => true))
                ->add('destination', 'entity', array('class' => 'BardisCMS\DestinationBundle\Entity\Destination', 'property' => 'title', 'expanded' => false, 'multiple' => false, 'label' => 'Select Related Destination', 'attr' => array('class' => 'autoCompleteItems autoCompleteSpot'), 'required' => false))
                ->add('class', null, array('label' => 'Intro Item CSS Class', 'required' => false))
                ->add('spotDestinationFilterIcon', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'icons', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Spot Destination Icon', 'required' => false))
                ->setHelps(array(
                    'title'						=> 'Set the title of the Spot Destination',
                    'class'						=> 'Set the css class that applies to the Spot Destination items',
                    'spotDestinationFilterIcon'	=> 'Set the icon of the Spot Destination'
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
            ->addIdentifier('destination')
            ->addIdentifier('class')
            ->addIdentifier('spotDestinationFilterIcon')
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