<?php

/*
 * Spot Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\SpotBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityManager;

class SpotFiltersFormType extends AbstractType
{
    
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		
        $builder->add('sport', 'entity', array(
            'class'         => 'BardisCMS\SpotBundle\Entity\SpotFilter', 
            'query_builder' => $this->getFilters('sport'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Sport', 
            'required'      => false,
            )
        );
        
        $builder->add('destinations', 'entity', array(
            'class'		=> 'BardisCMS\SpotBundle\Entity\SpotDestination',
            'property'	=> 'title', 
            'expanded'	=> true, 
            'multiple'	=> true, 
            'label'		=> 'Destination', 
            'required'	=> false,
            )
        );
        
        $builder->add('budget', 'entity', array(
            'class'         => 'BardisCMS\SpotBundle\Entity\SpotFilter', 
            'query_builder' => $this->getFilters('budget'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Budget', 
            'required'      => false,
            )
        );
        
        $builder->add('season', 'entity', array(
            'class'         => 'BardisCMS\SpotBundle\Entity\SpotFilter', 
            'query_builder' => $this->getFilters('season'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Season', 
            'required'      => false,
            )
        );
        
        $builder->add('experience', 'entity', array(
            'class'         => 'BardisCMS\SpotBundle\Entity\SpotFilter', 
            'query_builder' => $this->getFilters('experience'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Experience', 
            'required'      => false,
            )
        );
        
        $builder->add('style', 'entity', array(
            'class'         => 'BardisCMS\SpotBundle\Entity\SpotFilter', 
            'query_builder' => $this->getFilters('style'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Style', 
            'required'      => false,
            )
        );
        
        $builder->add('sea_state', 'entity', array(
            'class'         => 'BardisCMS\SpotBundle\Entity\SpotFilter', 
            'query_builder' => $this->getFilters('sea_state'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Sea State', 
            'required'      => false,
            )
        );
        
        $builder->add('wind_force', 'entity', array(
            'class'         => 'BardisCMS\SpotBundle\Entity\SpotFilter', 
            'query_builder' => $this->getFilters('wind_force'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Wind Force', 
            'required'      => false,
            )
        );
        
        $builder->add('swell_length', 'entity', array(
            'class'         => 'BardisCMS\SpotBundle\Entity\SpotFilter', 
            'query_builder' => $this->getFilters('swell_length'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Swell Length', 
            'required'      => false,
            )
        );
        
        $builder->add('amenities', 'entity', array(
            'class'         => 'BardisCMS\SpotBundle\Entity\SpotFilter', 
            'query_builder' => $this->getFilters('amenities'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Amenities', 
            'required'      => false,
            )
        );
        
        $builder->add('lifestyle', 'entity', array(
            'class'         => 'BardisCMS\SpotBundle\Entity\SpotFilter', 
            'query_builder' => $this->getFilters('lifestyle'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Lifestyle', 
            'required'      => false,
            )
        );
    }
    
    public function getFilters($filterCategory)
    {
        
        $filterList = array();
        $qb         = $this->entityManager->createQueryBuilder();  
        
        $qb->select('DISTINCT t')
            ->from('SpotBundle:SpotFilter', 't')
            ->where($qb->expr()->andX(
                    $qb->expr()->in('t.filterCategory', ':filterCategory')
            ))
            ->orderBy('t.filterCategory', 'DESC')
            ->setParameter('filterCategory', $filterCategory)
        ;
        
        return  $qb;
    }
    
    
    public function getFilterCategories()
    {
        
        $filterTagsList = array();
        $qb             = $this->entityManager->createQueryBuilder();  
        
        $qb->select('DISTINCT c')
            ->from('SpotBundle:SpotDestination', 'c')
            ->where($qb->expr()->andX(
                    $qb->expr()->neq('c.id', ':homepageCategory')
            ))
            ->orderBy('c.title', 'DESC')
            ->setParameter('homepageCategory', 8)
        ;
        
        return  $qb;
    }
    
    public function getName()
    {
        return 'spotfiltersform';
    }    
}
