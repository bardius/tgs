<?php
/*
 * Recipe Bundle
 * This file is part of the maynard malone CMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */
namespace Maynard\RecipeBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Form\Type;


class RecipeTagsAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {   
                
        // Getting the container parameters set in the config file that exist
        $pageSettings = $this->getConfigurationPool()->getContainer()->getParameter('recipe_settings');
        
        // Setting up the available tag categories and preffered choice
        $tagcategoriesChoices       = $pageSettings['tagcategories'];
        
        $formMapper
            ->with('Tag Details', array('collapsed' => false))
                ->add('title', null, array('label' => 'Tag Title', 'required' => true))
                ->add('tagCategory', 'choice', array('choices' => $tagcategoriesChoices, 'label' => 'Tag Category', 'required' => false))              
                ->add('tagIcon', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'icons', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Tag Icon', 'required' => false))
                ->setHelps(array(
                    'title'             => 'Set the title of the tag',
                    'tagCategory'       => 'Set the category of the tag',
                    'tagIcon'           => 'Set the icon of the of the tag'
                ))
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
                
        // Getting the container parameters set in the config file that exist
        $pageSettings           = $this->getConfigurationPool()->getContainer()->getParameter('recipe_settings');
        
        // Setting up the available tag categories and preffered choice
        $tagcategoriesChoices   = $pageSettings['tagcategories'];
        
        $datagridMapper
            ->add('title')
            ->add('tagCategory', 'doctrine_orm_string', array(), 'choice', array('choices' => $tagcategoriesChoices))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->addIdentifier('tagCategoryAsString', null, array('sortable' => false, 'label' => 'Tag Category'))
            ->addIdentifier('tagIcon')
            ->add('_action', 'actions', array( 
                    'actions' => array(  
                        'edit' => array(
                            'template' => 'RecipeBundle:Admin:edit.html.twig'
                        ),
                        'delete' => array(
                            'template' => 'RecipeBundle:Admin:delete.html.twig'
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