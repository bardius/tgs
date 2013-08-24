<?php
/*
 * Recipe Bundle
 * This file is part of the maynard malone CMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */
namespace Maynard\RecipeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityManager;

class RecipeFiltersFormType extends AbstractType
{
    
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('categories', 'entity', array(
            'class'     => 'Maynard\RecipeBundle\Entity\RecipeCategory', 
            'query_builder' => $this->getFilterCategories(),
            'property'  => 'title', 
            'expanded'  => true, 
            'multiple'  => true, 
            'label'     => 'Course', 
            'required'  => false,
            )
        );
        
        $builder->add('tagsoccasions', 'entity', array(
            'class'         => 'Maynard\RecipeBundle\Entity\RecipeTag', 
            'query_builder' => $this->getFilterTags('occasions'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Occasions', 
            'required'      => false,
            )
        );
        
        $builder->add('tagseveryday', 'entity', array(
            'class'         => 'Maynard\RecipeBundle\Entity\RecipeTag', 
            'query_builder' => $this->getFilterTags('everyday'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Everyday', 
            'required'      => false,
            )
        );
        
        $builder->add('tagsfavourites', 'entity', array(
            'class'         => 'Maynard\RecipeBundle\Entity\RecipeTag', 
            'query_builder' => $this->getFilterTags('favourites'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Our Favourites', 
            'required'      => false,
            )
        );
    }
    
    
    public function getFilterTags($tagCategory)
    {
        
        $filterTagsList = array();
        $qb             = $this->entityManager->createQueryBuilder();  
        
        $qb->select('DISTINCT t')
            ->from('RecipeBundle:RecipeTag', 't')
            ->where($qb->expr()->andX(
                    $qb->expr()->in('t.tagCategory', ':tagCategory')
            ))
            ->orderBy('t.tagCategory', 'DESC')
            ->setParameter('tagCategory', $tagCategory)
        ;
        
        return  $qb;
    }
    
    
    public function getFilterCategories()
    {
        
        $filterTagsList = array();
        $qb             = $this->entityManager->createQueryBuilder();  
        
        $qb->select('DISTINCT c')
            ->from('RecipeBundle:RecipeCategory', 'c')
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
        return 'recipefiltersform';
    }    
}
