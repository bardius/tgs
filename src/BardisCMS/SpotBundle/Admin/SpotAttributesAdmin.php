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


class SpotAttributesAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {   
                
        // Getting the container parameters set in the config file that exist
        $pageSettings = $this->getConfigurationPool()->getContainer()->getParameter('spots_settings');
        
        $formMapper
            ->with('Spot Access Attributes', array('collapsed' => false))
                ->add('nearestAirport', null, array('label' => 'Nearest Town', 'required' => false))
                ->add('nearestTown', null, array('label' => 'Nearest Town', 'required' => false))
                ->add('publicTransportation', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Publish Status', 'required' => false))
                ->add('accessProblem', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Access Problem', 'required' => false))
            ->end()
			->with('Spot Amenities/Facilities', array('collapsed' => false))
                ->add('surfClub', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Surf Club', 'required' => false))
                ->add('lessons', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Lessons', 'required' => false))
                ->add('rental', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Rental', 'required' => false))
                ->add('storage', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Storage', 'required' => false))
                ->add('repair', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Repair', 'required' => false))
                ->add('gearshop', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Gearshop', 'required' => false))
                ->add('rescue', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Rescue', 'required' => false))
                ->add('snacksAndDrinks', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Snacks And Drinks', 'required' => false))
                ->add('parking', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Parking', 'required' => false))
                ->add('toilets', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Toilets', 'required' => false))
                ->add('showers', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Showers', 'required' => false))
                ->add('accommodation', null, array('label' => 'Accommodation', 'required' => false))
                ->add('budjet', null, array('label' => 'Budjet', 'required' => false))
            ->end()
            ->with('Spot Beach Characteristics', array('collapsed' => false))
                ->add('spotType', null, array('label' => 'Spot Type', 'required' => false))
                ->add('shoreType', null, array('label' => 'Shore Type', 'required' => false))
                ->add('experiance', null, array('label' => 'Experiance', 'required' => false))
                ->add('style', null, array('label' => 'Style', 'required' => false))
                ->add('crowded', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Crowded', 'required' => false))
                ->add('dangers', null, array('label' => 'Dangers', 'required' => false))
            ->end()
            ->with('Spot Winds/Sewlls/Water Conditions', array('collapsed' => false))
                ->add('windDirection', null, array('label' => 'Wind Direction', 'required' => false))
                ->add('bestWindDirection', null, array('label' => 'Best Wind Direction', 'required' => false))
                ->add('windForce', null, array('label' => 'Wind Force', 'required' => false))
                ->add('relative', null, array('label' => 'Relative', 'required' => false))
                ->add('blowingTime', null, array('label' => 'Blowing Time', 'required' => false))
                ->add('seaState', null, array('label' => 'Sea State', 'required' => false))
                ->add('swellType', null, array('label' => 'Swell Type', 'required' => false))
                ->add('swellDirection', null, array('label' => 'Swell Direction', 'required' => false))
                ->add('swellLength', null, array('label' => 'Swell Length', 'required' => false))
                ->add('pointBreak', null, array('label' => 'Point Break', 'required' => false))
                ->add('tide', null, array('label' => 'Tide', 'required' => false))
                ->add('waterQuality', null, array('label' => 'Water Quality', 'required' => false))
                ->add('season', null, array('label' => 'Season', 'required' => false))
                ->add('seaTemperature', null, array('label' => 'Sea Temperature', 'required' => false))
            ->end()
            ->with('Spot Lifestyle', array('collapsed' => false))
                ->add('nightlife', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Nightlife', 'required' => false))
                ->add('family', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Family', 'required' => false))
                ->add('reastaurant', 'choice', array('choices' => array('0' => 'No', '1' => 'Yes'), 'preferred_choices' => array('0'), 'label' => 'Reastaurant', 'required' => false))
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