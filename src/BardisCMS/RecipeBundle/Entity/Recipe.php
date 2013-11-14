<?php

namespace BardisCMS\RecipeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Sonata\MediaBundle\Entity\Media;
use Application\Sonata\UserBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use BardisCMS\PageBundle\Entity\ContentBlock;
use BardisCMS\RecipeBundle\Entity\RecipeCategory;
use BardisCMS\RecipeBundle\Entity\RecipeTag;


/**
 * BardisCMS\RecipeBundle\Entity\Recipe
 *
 * @ORM\Table(name="recipes")
 * @DoctrineAssert\UniqueEntity(fields="alias", message="Alias must be unique")
 * @ORM\Entity(repositoryClass="BardisCMS\RecipeBundle\Repository\RecipeRepository")
 */
class Recipe
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="date")
     */ 
    protected $date;

    /**
     * @ORM\Column(type="string", length=255)
     */ 
    protected $title;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(name="author", onDelete="SET NULL")
     */ 
    protected $author;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, unique = true)
     */  
    protected $alias = null;

    /**
     * @ORM\Column(type="integer")
     */ 
    protected $pageOrder = 99;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */ 
    protected $showPageTitle;

    /**
     * @ORM\Column(type="integer")
     */   
    protected $publishState;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $pageclass = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $description = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $keywords = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */ 
    protected $introtext = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */ 
    protected $summary = null;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="introimage", onDelete="SET NULL")
     */ 
    protected $introimage;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="introvideo", onDelete="SET NULL")
     */
    protected $introvideo;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="recipeimage", onDelete="SET NULL")
     */ 
    protected $recipeimage;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="bgimage", onDelete="SET NULL")
     */ 
    protected $bgimage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $intromediasize = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $introclass = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $preperation = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $cooking = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $servings = null;
	
    /**
     * @ORM\ManyToOne(targetEntity="BardisCMS\ProductBundle\Entity\Product")
     * @ORM\JoinColumn(name="product", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $product;

    /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\RecipeBundle\Entity\RecipeCategory", inversedBy="recipes", cascade={"persist"})
    * @ORM\JoinTable(name="recipes_categories")
    */
    protected $categories;

    /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\RecipeBundle\Entity\RecipeTag", inversedBy="recipes", cascade={"persist"})
    * @ORM\JoinTable(name="recipes_tags")
    */
    protected $tags;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $pagetype = null;

   
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\PageBundle\Entity\ContentBlock", inversedBy="recipe_maincontents", cascade={"persist"})
     * @ORM\JoinTable(name="recipe_maincontent_blocks")
     **/
    protected $maincontentblocks;

   
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\PageBundle\Entity\ContentBlock", inversedBy="recipe_secondarycontents", cascade={"persist"})
     * @ORM\JoinTable(name="recipe_secondarycontent_blocks")
     **/
    protected $secondarycontentblocks;

   
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\PageBundle\Entity\ContentBlock", inversedBy="recipe_extracontents", cascade={"persist"})
     * @ORM\JoinTable(name="recipe_extracontent_blocks")
     **/
    protected $extracontentblocks;

   
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\PageBundle\Entity\ContentBlock", inversedBy="recipe_bannercontents", cascade={"persist"})
     * @ORM\JoinTable(name="recipe_bannercontent_blocks")
     **/
    protected $bannercontentblocks;


    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\PageBundle\Entity\ContentBlock", inversedBy="recipe_modalcontents", cascade={"persist"})
     * @ORM\JoinTable(name="recipe_modalcontent_blocks")
     **/
    protected $modalcontentblocks;
    

    public function __construct() {
        $this->modalcontentblocks 		= new \Doctrine\Common\Collections\ArrayCollection();
        $this->maincontentblocks 		= new \Doctrine\Common\Collections\ArrayCollection();
        $this->secondarycontentblocks 		= new \Doctrine\Common\Collections\ArrayCollection();
        $this->extracontentblocks 		= new \Doctrine\Common\Collections\ArrayCollection();
        $this->bannercontentblocks 		= new \Doctrine\Common\Collections\ArrayCollection();
	$this->date                             = new \DateTime();
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
     * Set date
     *
     * @param \DateTime $date
     * @return Recipe
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Recipe
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
     * Set alias
     *
     * @param string $alias
     * @return Recipe
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    
        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set pageOrder
     *
     * @param integer $pageOrder
     * @return Recipe
     */
    public function setPageOrder($pageOrder)
    {
        $this->pageOrder = $pageOrder;
    
        return $this;
    }

    /**
     * Get pageOrder
     *
     * @return integer 
     */
    public function getPageOrder()
    {
        return $this->pageOrder;
    }

    /**
     * Set showPageTitle
     *
     * @param integer $showPageTitle
     * @return Recipe
     */
    public function setShowPageTitle($showPageTitle)
    {
        $this->showPageTitle = $showPageTitle;
    
        return $this;
    }

    /**
     * Get showPageTitle
     *
     * @return integer 
     */
    public function getShowPageTitle()
    {
        return $this->showPageTitle;
    }

    /**
     * Set publishState
     *
     * @param integer $publishState
     * @return Recipe
     */
    public function setPublishState($publishState)
    {
        $this->publishState = $publishState;
    
        return $this;
    }

    /**
     * Get publishState
     *
     * @return integer 
     */
    public function getPublishState()
    {
        return $this->publishState;
    }

    /**
     * Set pageclass
     *
     * @param string $pageclass
     * @return Recipe
     */
    public function setPageclass($pageclass)
    {
        $this->pageclass = $pageclass;
    
        return $this;
    }

    /**
     * Get pageclass
     *
     * @return string 
     */
    public function getPageclass()
    {
        return $this->pageclass;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Recipe
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    
        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Recipe
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    
        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set introtext
     *
     * @param string $introtext
     * @return Recipe
     */
    public function setIntrotext($introtext)
    {
        $this->introtext = $introtext;
    
        return $this;
    }

    /**
     * Get introtext
     *
     * @return string 
     */
    public function getIntrotext()
    {
        return $this->introtext;
    }

    /**
     * Set introvideo
     *
     * @param Application\Sonata\MediaBundle\Entity\Media $introvideo
     * @return Page
     */
    public function setIntrovideo(\Application\Sonata\MediaBundle\Entity\Media $introvideo = null)
    {
        $this->introvideo = $introvideo;
        return $this;
    }

    /**
     * Get introvideo
     *
     * @return Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getIntrovideo()
    {
        return $this->introvideo;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Recipe
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set intromediasize
     *
     * @param string $intromediasize
     * @return Recipe
     */
    public function setIntromediasize($intromediasize)
    {
        $this->intromediasize = $intromediasize;
    
        return $this;
    }

    /**
     * Get intromediasize
     *
     * @return string 
     */
    public function getIntromediasize()
    {
        return $this->intromediasize;
    }

    /**
     * Set introclass
     *
     * @param string $introclass
     * @return Recipe
     */
    public function setIntroclass($introclass)
    {
        $this->introclass = $introclass;
    
        return $this;
    }

    /**
     * Get introclass
     *
     * @return string 
     */
    public function getIntroclass()
    {
        return $this->introclass;
    }

    /**
     * Set pagetype
     *
     * @param string $pagetype
     * @return Recipe
     */
    public function setPagetype($pagetype)
    {
        $this->pagetype = $pagetype;
    
        return $this;
    }

    /**
     * Get pagetype
     *
     * @return string 
     */
    public function getPagetype()
    {
        return $this->pagetype;
    }

    /**
     * Set author
     *
     * @param \Application\Sonata\UserBundle\Entity\User $author
     * @return Recipe
     */
    public function setAuthor(\Application\Sonata\UserBundle\Entity\User $author = null)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set introimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $introimage
     * @return Recipe
     */
    public function setIntroimage(\Application\Sonata\MediaBundle\Entity\Media $introimage = null)
    {
        $this->introimage = $introimage;
    
        return $this;
    }

    /**
     * Get introimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getIntroimage()
    {
        return $this->introimage;
    }
    
    /**
     * Set recipeimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $recipeimage
     * @return Recipe
     */
    public function setRecipeimage(\Application\Sonata\MediaBundle\Entity\Media $recipeimage = null)
    {
        $this->recipeimage = $recipeimage;
    
        return $this;
    }

    /**
     * Get recipeimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getRecipeimage()
    {
        return $this->recipeimage;
    }

    /**
     * Set bgimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $bgimage
     * @return Recipe
     */
    public function setBgimage(\Application\Sonata\MediaBundle\Entity\Media $bgimage = null)
    {
        $this->bgimage = $bgimage;
    
        return $this;
    }

    /**
     * Get bgimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getBgimage()
    {
        return $this->bgimage;
    }

    /**
     * Add categories
     *
     * @param \BardisCMS\RecipeBundle\Entity\RecipeCategory $categories
     * @return Recipe
     */
    public function addCategory(\BardisCMS\RecipeBundle\Entity\RecipeCategory $categories)
    {
        $this->categories[] = $categories;
    
        return $this;
    }

    /**
     * Remove categories
     *
     * @param \BardisCMS\RecipeBundle\Entity\RecipeCategory $categories
     */
    public function removeCategory(\BardisCMS\RecipeBundle\Entity\RecipeCategory $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add tags
     *
     * @param \BardisCMS\RecipeBundle\Entity\RecipeTag $tags
     * @return Recipe
     */
    public function addTag(\BardisCMS\RecipeBundle\Entity\RecipeTag $tags)
    {
        $this->tags[] = $tags;
    
        return $this;
    }

    /**
     * Remove tags
     *
     * @param \BardisCMS\RecipeBundle\Entity\RecipeTag $tags
     */
    public function removeTag(\BardisCMS\RecipeBundle\Entity\RecipeTag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add maincontentblocks
     *
     * @param \BardisCMS\PageBundle\Entity\ContentBlock $maincontentblocks
     * @return Recipe
     */
    public function addMaincontentblock(\BardisCMS\PageBundle\Entity\ContentBlock $maincontentblocks)
    {
        $this->maincontentblocks[] = $maincontentblocks;
    
        return $this;
    }

    /**
     * Remove maincontentblocks
     *
     * @param \BardisCMS\PageBundle\Entity\ContentBlock $maincontentblocks
     */
    public function removeMaincontentblock(\BardisCMS\PageBundle\Entity\ContentBlock $maincontentblocks)
    {
        $this->maincontentblocks->removeElement($maincontentblocks);
    }

    /**
     * Get maincontentblocks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMaincontentblocks()
    {
        return $this->maincontentblocks;
    }

    /**
     * Add bannercontentblocks
     *
     * @param \BardisCMS\PageBundle\Entity\ContentBlock $bannercontentblocks
     * @return Recipe
     */
    public function addBannercontentblock(\BardisCMS\PageBundle\Entity\ContentBlock $bannercontentblocks)
    {
        $this->bannercontentblocks[] = $bannercontentblocks;
    
        return $this;
    }

    /**
     * Remove bannercontentblocks
     *
     * @param \BardisCMS\PageBundle\Entity\ContentBlock $bannercontentblocks
     */
    public function removeBannercontentblock(\BardisCMS\PageBundle\Entity\ContentBlock $bannercontentblocks)
    {
        $this->bannercontentblocks->removeElement($bannercontentblocks);
    }

    /**
     * Get bannercontentblocks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBannercontentblocks()
    {
        return $this->bannercontentblocks;
    }

    /**
     * Add modalcontentblocks
     *
     * @param \BardisCMS\PageBundle\Entity\ContentBlock $modalcontentblocks
     * @return Recipe
     */
    public function addModalcontentblock(\BardisCMS\PageBundle\Entity\ContentBlock $modalcontentblocks)
    {
        $this->modalcontentblocks[] = $modalcontentblocks;
    
        return $this;
    }

    /**
     * Remove modalcontentblocks
     *
     * @param \BardisCMS\PageBundle\Entity\ContentBlock $modalcontentblocks
     */
    public function removeModalcontentblock(\BardisCMS\PageBundle\Entity\ContentBlock $modalcontentblocks)
    {
        $this->modalcontentblocks->removeElement($modalcontentblocks);
    }

    /**
     * Get modalcontentblocks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModalcontentblocks()
    {
        return $this->modalcontentblocks;
    }
    
    /**
     * Set preperation
     *
     * @param string $preperation
     * @return Recipe
     */
    public function setPreperation($preperation)
    {
        $this->preperation = $preperation;
    
        return $this;
    }

    /**
     * Get preperation
     *
     * @return string 
     */
    public function getPreperation()
    {
        return $this->preperation;
    }

    /**
     * Set cooking
     *
     * @param string $cooking
     * @return Recipe
     */
    public function setCooking($cooking)
    {
        $this->cooking = $cooking;
    
        return $this;
    }

    /**
     * Get cooking
     *
     * @return string 
     */
    public function getCooking()
    {
        return $this->cooking;
    }

    /**
     * Set servings
     *
     * @param string $servings
     * @return Recipe
     */
    public function setServings($servings)
    {
        $this->servings = $servings;
    
        return $this;
    }

    /**
     * Get servings
     *
     * @return string 
     */
    public function getServings()
    {
        return $this->servings;
    }

    /**
     * Set product
     *
     * @param \BardisCMS\ProductBundle\Entity\Product $product
     * @return Recipe
     */
    public function setProduct(\BardisCMS\ProductBundle\Entity\Product $product = null)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \BardisCMS\ProductBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Add secondarycontentblocks
     *
     * @param \BardisCMS\PageBundle\Entity\ContentBlock $secondarycontentblocks
     * @return Recipe
     */
    public function addSecondarycontentblock(\BardisCMS\PageBundle\Entity\ContentBlock $secondarycontentblocks)
    {
        $this->secondarycontentblocks[] = $secondarycontentblocks;
    
        return $this;
    }

    /**
     * Remove secondarycontentblocks
     *
     * @param \BardisCMS\PageBundle\Entity\ContentBlock $secondarycontentblocks
     */
    public function removeSecondarycontentblock(\BardisCMS\PageBundle\Entity\ContentBlock $secondarycontentblocks)
    {
        $this->secondarycontentblocks->removeElement($secondarycontentblocks);
    }

    /**
     * Get secondarycontentblocks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSecondarycontentblocks()
    {
        return $this->secondarycontentblocks;
    }

    /**
     * Add extracontentblocks
     *
     * @param \BardisCMS\PageBundle\Entity\ContentBlock $extracontentblocks
     * @return Recipe
     */
    public function addExtracontentblock(\BardisCMS\PageBundle\Entity\ContentBlock $extracontentblocks)
    {
        $this->extracontentblocks[] = $extracontentblocks;
    
        return $this;
    }

    /**
     * Remove extracontentblocks
     *
     * @param \BardisCMS\PageBundle\Entity\ContentBlock $extracontentblocks
     */
    public function removeExtracontentblock(\BardisCMS\PageBundle\Entity\ContentBlock $extracontentblocks)
    {
        $this->extracontentblocks->removeElement($extracontentblocks);
    }

    /**
     * Get extracontentblocks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExtracontentblocks()
    {
        return $this->extracontentblocks;
    }
	
    /**
     * toString Title
     *
     * @return string 
     */
    public function __toString()
    {
        return (string)$this->getTitle();
    }
    
    /**
    * toString PublishState
    *
    * @return string 
    */
    public function getPublishStateAsString()
    {
        switch($this->getPublishState()){
            case(0): return "Unpublished";
            case(1): return "Published";
            case(2): return "Preview";
        }
    }
    
    /**
    * toString Pagetype
    *
    * @return string 
    */
    public function getPagetypeAsString()
    {
        switch($this->getPagetype()){
            case('recipe_article'):         return "Recipe Article";
            case('recipe_filtered_list'):   return "Recipe Filtered Results";
            case('recipe_cat_page'):        return "Recipe Category Page";
            case('recipe_home'):            return "Recipe Homepage";
        }
    }
}