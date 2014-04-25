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
		// Setting the predefined values for the multiselect options of the Spot attributes
		$this->accommodationChoices = array(
			'Camping'	=> 'Camping',
			'Hotel'		=> 'Hotel'		
		);
		
		$this->budgetChoices = array(
			'Low'		=> 'Low',
			'Medium'	=> 'Medium',
			'High'		=> 'High'
		);
		
		$this->spotTypeChoices = array(
			'Beach'			=> 'Beach',
			'Shorebreak'	=> 'Shorebreak',
			'Lagoon'		=> 'Lagoon'
		);
		
		$this->sportsChoices = array(
			'Surf'			=> 'Surf',
			'Windsurf'		=> 'Windsurf',
			'Kitesurf'		=> 'Kitesurf',
			'Wakeboard'		=> 'Wakeboard',
			'Waterski'		=> 'Waterski'
		);
		
		$this->experienceChoices = array(
			'Beginner'		=> 'Beginner',
			'Intermediate'	=> 'Intermediate',
			'Advanced'		=> 'Advanced ',
			'All'			=> 'All'
		);
		
		$this->styleChoices = array(
			'Wave'			=> 'Wave',
			'Freeride'		=> 'Freeride',
			'Freestyle'		=> 'Freestyle',
			'Wakestyle'		=> 'Wakestyle',
			'Big Jumps'		=> 'Big Jumps',
			'Formula'		=> 'Formula'
		);
		
		$this->crowdedChoices = array(
			'Non crowded'		=> 'Non crowded',
			'Rarely crowded'	=> 'Rarely crowded',
			'Sometimes crowded'	=> 'Sometimes crowded',
			'Not too crowded'	=> 'Not too crowded',
			'Few surfers'		=> 'Few surfers',
			'Crowded'			=> 'Crowded',
			'Too crowded'		=> 'Too crowded'
		);
		
		$this->windDirectionChoices = array(
			'N'		=> 'N',
			'NNE'	=> 'NNE',
			'NE'	=> 'NE',
			'ENE'	=> 'ENE',
			'E'		=> 'E',
			'ESE'	=> 'ESE',
			'SE'	=> 'SE',
			'SSE'	=> 'SSE',
			'S'		=> 'S',
			'SSW'	=> 'SSW',
			'SW'	=> 'SW',
			'WSW'	=> 'WSW',
			'W'		=> 'W',
			'WNW'	=> 'WNW',
			'NW'	=> 'NW',
			'NNW'	=> 'NNW'
		);
		
		$this->windForceChoices = array(
			'Light'		=> 'Light',
			'Medium'	=> 'Medium',
			'Strong'	=> 'Strong'
		);
		
		$this->bestWindDirectionChoices = array(
			'N'		=> 'N',
			'NNE'	=> 'NNE',
			'NE'	=> 'NE',
			'ENE'	=> 'ENE',
			'E'		=> 'E',
			'ESE'	=> 'ESE',
			'SE'	=> 'SE',
			'SSE'	=> 'SSE',
			'S'		=> 'S',
			'SSW'	=> 'SSW',
			'SW'	=> 'SW',
			'WSW'	=> 'WSW',
			'W'		=> 'W',
			'WNW'	=> 'WNW',
			'NW'	=> 'NW',
			'NNW'	=> 'NNW'
		);
		
		$this->relativeChoices = array(
			'Side Off Shore'	=> 'Side Off Shore',
			'Side On Shore'		=> 'Side On Shore',
			'Side Shore'		=> 'Side Shore',
			'Off Shore'			=> 'Off Shore',
			'On Shore'			=> 'On Shore'
		);
		
		$this->seaStateChoices = array(
			'Wave'		=> 'Wave',
			'Choppy'	=> 'Choppy',
			'Flat'		=> 'Flat'
		);
		
		$this->swellTypeChoices = array(
			'Mixed'			=> 'Mixed',
			'Wind swells'	=> 'Wind swells',
			'Ground swells'	=> 'Ground swells'
		);
		
		$this->swellDirectionChoices = array(
			'N'		=> 'N',
			'NNE'	=> 'NNE',
			'NE'	=> 'NE',
			'ENE'	=> 'ENE',
			'E'		=> 'E',
			'ESE'	=> 'ESE',
			'SE'	=> 'SE',
			'SSE'	=> 'SSE',
			'S'		=> 'S',
			'SSW'	=> 'SSW',
			'SW'	=> 'SW',
			'WSW'	=> 'WSW',
			'W'		=> 'W',
			'WNW'	=> 'WNW',
			'NW'	=> 'NW',
			'NNW'	=> 'NNW'
		);
		
		$this->swellLengthChoices = array(
			'Short'		=> 'Short',
			'Medium'	=> 'Medium',
			'High'		=> 'High'
		);
		
		$this->pointBreakChoices = array(
			'Left'		=> 'Left',
			'Right'		=> 'Right'
		);
		
		$this->tideChoices = array(
			'High'			=> 'High',
			'Low'			=> 'Low',
			'All stages'	=> 'All stages'
		);
		
		$this->seasonChoices = array(
			'Summer'	=> 'Summer',
			'Automn'	=> 'Automn',
			'Winter'	=> 'Winter',
			'Spring'	=> 'Spring',
			'All'		=> 'All'			
		);
		
    }

    
    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $formBuilder, array $options)
    {
		
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
                ->add('accommodation', 'choice', array('empty_value' => false, 'choices' => $this->accommodationChoices, 'label' => 'Accommodation', 'required' => false, 'multiple' => true, 'expanded' => true))  
                ->add('budget', 'choice', array('empty_value' => false, 'choices' => $this->budgetChoices, 'label' => 'Budget', 'required' => false, 'multiple' => true, 'expanded' => true))  
                ->add('spotType', 'choice', array('empty_value' => false, 'choices' => $this->spotTypeChoices, 'label' => 'Spot Type', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('shoreType', 'text', array('label' => 'Shore Type', 'required' => false))
                ->add('bottom', 'text', array('label' => 'Bottom', 'required' => false))
                ->add('sports', 'choice', array('empty_value' => false, 'choices' => $this->sportsChoices, 'label' => 'Sports', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('experience', 'choice', array('empty_value' => false, 'choices' => $this->experienceChoices, 'label' => 'Experience', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('style', 'choice', array('empty_value' => false, 'choices' => $this->styleChoices, 'label' => 'Style', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('crowded', 'choice', array('empty_value' => false, 'choices' => $this->crowdedChoices, 'label' => 'Crowded', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('dangers', 'text', array('label' => 'Dangers', 'required' => false))
                ->add('windDirection', 'choice', array('empty_value' => false, 'choices' => $this->windDirectionChoices, 'label' => 'Wind Direction', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('bestWindDirection', 'choice', array('empty_value' => false, 'choices' => $this->bestWindDirectionChoices, 'label' => 'Best Wind Direction', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('windForce', 'choice', array('empty_value' => false, 'choices' => $this->windForceChoices, 'label' => 'Wind Force', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('relative', 'choice', array('empty_value' => false, 'choices' => $this->relativeChoices, 'label' => 'Relative', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('blowingTime', 'text', array('label' => 'Blowing Time', 'required' => false))
                ->add('seaState', 'choice', array('empty_value' => false, 'choices' => $this->seaStateChoices, 'label' => 'Sea State', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('swellType', 'choice', array('empty_value' => false, 'choices' => $this->swellTypeChoices, 'label' => 'Swell Type', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('swellDirection', 'choice', array('empty_value' => false, 'choices' => $this->swellDirectionChoices, 'label' => 'Swell Direction', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('swellLength', 'choice', array('empty_value' => false, 'choices' => $this->swellLengthChoices, 'label' => 'Swell Length', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('pointBreak', 'choice', array('empty_value' => false, 'choices' => $this->pointBreakChoices, 'label' => 'Point Break', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('tide', 'choice', array('empty_value' => false, 'choices' => $this->tideChoices, 'label' => 'Tide', 'required' => false, 'multiple' => true, 'expanded' => true))
                ->add('waterQuality', 'text', array('label' => 'Water Quality', 'required' => false))
                ->add('season', 'choice', array('empty_value' => false, 'choices' => $this->seasonChoices, 'label' => 'Season', 'required' => false, 'multiple' => true, 'expanded' => true))  
                ->add('seaTemperature', 'text', array('label' => 'Sea Temperature', 'required' => false))
                ->add('nightlife', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Nightlife', 'required' => false))
                ->add('family', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Family', 'required' => false))
                ->add('restaurants', 'choice', array('empty_value' => false, 'choices' => array('0' => 'No', '1' => 'Yes'), 'label' => 'Restaurants', 'required' => false))
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