<?php
/*
 * Skeleton Bundle
 * This file is part of the maynard malone CMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */
namespace Maynard\SkeletonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FilterResultsForm extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('tags', 'entity', array(
            'class' => 'Maynard\PageBundle\Entity\Tag', 
            'property' => 'title', 
            'expanded' => true, 
            'multiple' => true, 
            'label' => 'Tags', 
            'required' => false,
            )
        );
        
        $builder->add('categories', 'entity', array(
            'class' => 'Maynard\PageBundle\Entity\Category', 
            'property' => 'title', 
            'expanded' => true, 
            'multiple' => true, 
            'label' => 'Categories', 
            'required' => false,
            )
        );
    }
    
    public function getName()
    {
        return 'filterresultsform';
    }    
}
