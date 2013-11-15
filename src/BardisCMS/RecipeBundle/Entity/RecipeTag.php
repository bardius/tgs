<?php

namespace BardisCMS\RecipeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BardisCMS\RecipeBundle\Entity\Recipe;
use Application\Sonata\MediaBundle\Entity\Media;


/**
 * BardisCMS\RecipeBundle\Entity\RecipeTag
 *
 * @ORM\Table(name="recipe_tags")
 * @ORM\Entity
 */
class RecipeTag
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
    protected $tagCategory;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="tagIcon")
     */ 
    protected $tagIcon;

   /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\RecipeBundle\Entity\Recipe", mappedBy="tags", cascade={"all"})
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
     * @return Tag
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
     * Set tagCategory
     *
     * @param string $tagCategory
     * @return Tag
     */
    public function setTagCategory($tagCategory)
    {
        $this->tagCategory = $tagCategory;
    
        return $this;
    }

    /**
     * Get tagCategory
     *
     * @return string 
     */
    public function getTagCategory()
    {
        return $this->tagCategory;
    }

    /**
     * Set tagIcon
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $tagIcon
     * @return Tag
     */
    public function setTagIcon(\Application\Sonata\MediaBundle\Entity\Media $tagIcon = null)
    {
        $this->tagIcon = $tagIcon;
    
        return $this;
    }

    /**
     * Get tagIcon
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getTagIcon()
    {
        return $this->tagIcon;
    }

    /**
     * Add recipes
     *
     * @param \BardisCMS\RecipeBundle\Entity\Recipe $recipes
     * @return Tag
     */
    public function addRecipe(\BardisCMS\RecipeBundle\Entity\Recipe $recipes)
    {
        $this->recipes[] = $recipes;
    
        return $this;
    }

    /**
     * Remove recipes
     *
     * @param \BardisCMS\RecipeBundle\Entity\Recipe $recipes
     */
    public function removeRecipe(\BardisCMS\RecipeBundle\Entity\Recipe $recipes)
    {
        $this->recipes->removeElement($recipes);
    }

    /**
     * Get recipes
     *
     * @return \Doctrine\Common\Collections\Collection 
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
    
    /**
    * toString tagCategory
    *
    * @return string 
    */
    public function getTagCategoryAsString()
    {
        switch($this->getTagCategory()){
            case('occasions'):  return "Occasions";
            case('everyday'):   return "Everyday";
            case('favourites'): return "Our Favourites";
            default:            return $this->getTagCategory();
        }
    }
}