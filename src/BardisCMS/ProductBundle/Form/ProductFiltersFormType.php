<?php
/*
 * Product Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */
namespace BardisCMS\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityManager;

class ProductFiltersFormType extends AbstractType
{
    
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {      
        
        $builder->add('tagssugar_type', 'entity', array(
            'class'         => 'BardisCMS\ProductBundle\Entity\ProductTag', 
            'query_builder' => $this->getFilterTags('sugar_type'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Sugar Type', 
            'required'      => false,
            )
        );
        
        $builder->add('categories', 'entity', array(
            'class' => 'BardisCMS\ProductBundle\Entity\ProductCategory', 
            'query_builder' => $this->getFilterCategories('sugar_type'),
            'property' => 'title', 
            'expanded' => true, 
            'multiple' => true, 
            'label' => 'Sugar Range', 
            'required' => false,
            )
        );
        
        $builder->add('tagsexcellent', 'entity', array(
            'class'         => 'BardisCMS\ProductBundle\Entity\ProductTag', 
            'query_builder' => $this->getFilterTags('excellent'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Excellent for', 
            'required'      => false,
            )
        );
        
        $builder->add('tagsbody', 'entity', array(
            'class'         => 'BardisCMS\ProductBundle\Entity\ProductTag', 
            'query_builder' => $this->getFilterTags('body'),
            'property'      => 'title', 
            'expanded'      => true, 
            'multiple'      => true, 
            'label'         => 'Body', 
            'required'      => false,
            )
        );
    }
    
    public function getFilterTags($tagCategory)
    {
        
        $filterTagsList = array();
        $qb             = $this->entityManager->createQueryBuilder();  
        
        $qb->select('DISTINCT t')
            ->from('ProductBundle:ProductTag', 't')
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
            ->from('ProductBundle:ProductCategory', 'c')
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
        return 'productfiltersform';
    }    
}
