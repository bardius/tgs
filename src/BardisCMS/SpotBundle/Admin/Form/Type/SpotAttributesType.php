<?php

/*
 * Spot Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\SpotBundle\Admin\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Sonata\AdminBundle\Form\EventListener\ResizeFormListener;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use BardisCMS\SpotBundle\Entity\SpotAttribute;

class SpotAttributesType extends AbstractType
{

    public function __construct()
    {
    }
    
    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $formBuilder, array $options)
    {
		$seasonChoices = array(
			'summer' => 'Summer',
			'automn' => 'Automn',
			'winter' => 'Winter',
			'spring' => 'Spring'			
		);
		
		$formBuilder
                ->add('nearestAirport', 'text', array('label' => 'Nearest Airport', 'required' => false))
                ->add('nearestTown', 'text', array('label' => 'Nearest Town', 'required' => false))
                ->add('publicTransportation', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Public Transportation', 'required' => false))
                ->add('accessProblem', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Access Problem', 'required' => false))
                ->add('surfClub', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Surf Club', 'required' => false))
                ->add('lessons', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Lessons', 'required' => false))
                ->add('rental', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Rental', 'required' => false))
                ->add('storage', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Storage', 'required' => false))
                ->add('repair', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Repair', 'required' => false))
                ->add('gearshop', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Gearshop', 'required' => false))
                ->add('rescue', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Rescue', 'required' => false))
                ->add('snacksAndDrinks', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Snacks And Drinks', 'required' => false))
                ->add('parking', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Parking', 'required' => false))
                ->add('toilets', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Toilets', 'required' => false))
                ->add('showers', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Showers', 'required' => false))
                ->add('accommodation', 'text', array('label' => 'Accommodation', 'required' => false))
                ->add('budjet', 'text', array('label' => 'Budjet', 'required' => false))
                ->add('spotType', 'text', array('label' => 'Spot Type', 'required' => false))
                ->add('shoreType', 'text', array('label' => 'Shore Type', 'required' => false))
                ->add('experiance', 'text', array('label' => 'Experiance', 'required' => false))
                ->add('style', 'text', array('label' => 'Style', 'required' => false))
                ->add('crowded', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Crowded', 'required' => false))
                ->add('dangers', 'text', array('label' => 'Dangers', 'required' => false))
                ->add('windDirection', 'text', array('label' => 'Wind Direction', 'required' => false))
                ->add('bestWindDirection', 'text', array('label' => 'Best Wind Direction', 'required' => false))
                ->add('windForce', 'text', array('label' => 'Wind Force', 'required' => false))
                ->add('relative', 'text', array('label' => 'Relative', 'required' => false))
                ->add('blowingTime', 'text', array('label' => 'Blowing Time', 'required' => false))
                ->add('seaState', 'text', array('label' => 'Sea State', 'required' => false))
                ->add('swellType', 'text', array('label' => 'Swell Type', 'required' => false))
                ->add('swellDirection', 'text', array('label' => 'Swell Direction', 'required' => false))
                ->add('swellLength', 'text', array('label' => 'Swell Length', 'required' => false))
                ->add('pointBreak', 'text', array('label' => 'Point Break', 'required' => false))
                ->add('tide', 'text', array('label' => 'Tide', 'required' => false))
                ->add('waterQuality', 'text', array('label' => 'Water Quality', 'required' => false))
                ->add('season', 'choice', array('empty_value' => false, 'choices' => $seasonChoices, 'label' => 'Season', 'required' => false, 'multiple' => true, 'expanded' => true))  
                ->add('seaTemperature', 'text', array('label' => 'Sea Temperature', 'required' => false))
                ->add('nightlife', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Nightlife', 'required' => false))
                ->add('family', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Family', 'required' => false))
                ->add('reastaurant', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Reastaurant', 'required' => false))
        ;
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {   
        $optionsNormalizer = function (Options $options, $value) {
            $value = 'BardisCMS\SpotBundle\Entity\SpotAttribute';

            return $value;
        };

        $resolver->setNormalizers(array(
            'data_class' => $optionsNormalizer,
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'spotattributes';
    }

}