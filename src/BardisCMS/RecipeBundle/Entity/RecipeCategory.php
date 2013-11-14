<?php

namespace BardisCMS\RecipeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BardisCMS\RecipeBundle\Entity\Recipe;
use Application\Sonata\MediaBundle\Entity\Media;


/**
 * BardisCMS\RecipeBundle\Entity\Category
 *
 * @ORM\Table(name="recipe_categories")
 * @ORM\Entity
 */
class RecipeCategory
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */ 
    protected $title;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $categoryClass = null;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="categoryIcon")
     */ 
    protected $categoryIcon;

   /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\RecipeBundle\Entity\Recipe", mappedBy="categories", cascade={"all"})
    */
    protected $recipes;

    public function __construct()
    {
        $this->recipes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
 

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Category
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set categoryClass
     *
     * @param string $categoryClass
     * @return Category
     */
    public function setCategoryClass($categoryClass)
    {
        $this->categoryClass = $categoryClass;
        return $this;
    }

    /**
     * Get categoryClass
     *
     * @return string 
     */
    public function getCategoryClass()
    {
        return $this->categoryClass;
    }

    /**
     * Set categoryIcon
     *
     * @param Application\Sonata\MediaBundle\Entity\Media $categoryIcon
     * @return Category
     */
    public function setCategoryIcon(\Application\Sonata\MediaBundle\Entity\Media $categoryIcon = null)
    {
        $this->categoryIcon = $categoryIcon;
        return $this;
    }

    /**
     * Get categoryIcon
     *
     * @return Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getCategoryIcon()
    {
        return $this->categoryIcon;
    }

    
    /**
     * Add recipes
     *
     * @param BardisCMS\RecipeBundle\Entity\Recipe $recipes
     * @return Category
     */
    public function addRecipe(\BardisCMS\RecipeBundle\Entity\Recipe $recipes)
    {
        $this->recipes[] = $recipes;
        return $this;
    }

    /**
     * Remove recipes
     *
     * @param BardisCMS\RecipeBundle\Entity\Recipe $recipes
     */
    public function removeRecipe(\BardisCMS\RecipeBundle\Entity\Recipe $recipes)
    {
        $this->recipes->removeElement($recipes);
    }

    /**
     * Get Recipe
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRecipes()
    {
        return $this->recipes;
    }

    
    /**
     * toString Title
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->getTitle();
    }
}