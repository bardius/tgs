<?php

namespace BardisCMS\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BardisCMS\PageBundle\Entity\Page;
use BardisCMS\BlogBundle\Entity\Blog;
use BardisCMS\RecipeBundle\Entity\Recipe;
use BardisCMS\ProductBundle\Entity\Product;
use BardisCMS\PageBundle\Entity\ContentImage;
use BardisCMS\PageBundle\Entity\ContentSlide;
use Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * BardisCMS\PageBundle\Entity\Page
 *
 * @ORM\Table(name="content_blocks")
 * @ORM\Entity
 */
class ContentBlock
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
     * @ORM\Column(type="integer")
     */ 
    protected $publishedState;

    /**
     * @ORM\Column(type="string", length=255)
     */ 
    protected $availability;

    /**
     * @ORM\Column(type="integer")
     */ 
    protected $showTitle;

    /**
     * @ORM\Column(type="integer")
     */ 
    protected $ordering;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $className = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $sizeClass = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $mediaSize = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $idName = null;

    /**
     * @ORM\Column(type="string", length=255)
     */ 
    protected $contentType;
    
    /**
     * @ORM\ManyToMany(targetEntity="Page", mappedBy="maincontentblocks", cascade={"persist"})
     **/
    protected $maincontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\BlogBundle\Entity\Blog", mappedBy="maincontentblocks", cascade={"persist"})
     **/
    protected $blog_maincontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\RecipeBundle\Entity\Recipe", mappedBy="maincontentblocks", cascade={"persist"})
     **/
    protected $recipe_maincontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ProductBundle\Entity\Product", mappedBy="maincontentblocks", cascade={"persist"})
     **/
    protected $product_maincontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="Page", mappedBy="secondarycontentblocks", cascade={"persist"})
     **/
    protected $secondarycontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\RecipeBundle\Entity\Recipe", mappedBy="secondarycontentblocks", cascade={"persist"})
     **/
    protected $recipe_secondarycontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ProductBundle\Entity\Product", mappedBy="secondarycontentblocks", cascade={"persist"})
     **/
    protected $product_secondarycontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="Page", mappedBy="extracontentblocks", cascade={"persist"})
     **/
    protected $extracontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\RecipeBundle\Entity\Recipe", mappedBy="extracontentblocks", cascade={"persist"})
     **/
    protected $recipe_extracontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="Page", mappedBy="modalcontentblocks", cascade={"persist"})
     **/
    protected $modalcontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\BlogBundle\Entity\Blog", mappedBy="modalcontentblocks", cascade={"persist"})
     **/
    protected $blog_modalcontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\RecipeBundle\Entity\Recipe", mappedBy="modalcontentblocks", cascade={"persist"})
     **/
    protected $recipe_modalcontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ProductBundle\Entity\Product", mappedBy="modalcontentblocks", cascade={"persist"})
     **/
    protected $product_modalcontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="Page", mappedBy="bannercontentblocks", cascade={"persist"})
     **/
    protected $bannercontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\BlogBundle\Entity\Blog", mappedBy="bannercontentblocks", cascade={"persist"})
     **/
    protected $blog_bannercontents;
    
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\RecipeBundle\Entity\Recipe", mappedBy="bannercontentblocks", cascade={"persist"})
     **/
    protected $recipe_bannercontents;

    /**
     * @ORM\ManyToMany(targetEntity="ContentImage", inversedBy="contentblocks", cascade={"all"}, orphanRemoval=true)
     * @ORM\JoinTable(name="content_blocks_images")
     */ 
    protected $imageFiles;

    /**
     * @ORM\OneToOne(targetEntity="ContentSlide", orphanRemoval=true, cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="slide", referencedColumnName="id", onDelete="CASCADE")
     */ 
    protected $slide;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", orphanRemoval=true, cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="fileFile", referencedColumnName="id", onDelete="CASCADE")
     */ 
    protected $fileFile;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", orphanRemoval=true, cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="vimeo", referencedColumnName="id", onDelete="CASCADE")
     */ 
    protected $vimeo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */ 
    protected $htmlText = null;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", orphanRemoval=true, cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="youtube", referencedColumnName="id", onDelete="CASCADE")
     */ 
    protected $youtube;

   
    public function __construct()
    {
        $this->maincontents                 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->blog_maincontents            = new \Doctrine\Common\Collections\ArrayCollection();
        $this->secondarycontents            = new \Doctrine\Common\Collections\ArrayCollection();
        $this->extracontents                = new \Doctrine\Common\Collections\ArrayCollection();
        $this->modalcontents                = new \Doctrine\Common\Collections\ArrayCollection();
        $this->bannercontents               = new \Doctrine\Common\Collections\ArrayCollection();
        $this->blog_modalcontents           = new \Doctrine\Common\Collections\ArrayCollection();
        $this->blog_bannercontents          = new \Doctrine\Common\Collections\ArrayCollection();
        $this->imagefiles                   = new \Doctrine\Common\Collections\ArrayCollection();
        $this->recipe_maincontents          = new \Doctrine\Common\Collections\ArrayCollection();
        $this->recipe_secondarycontents     = new \Doctrine\Common\Collections\ArrayCollection();
        $this->recipe_extracontents         = new \Doctrine\Common\Collections\ArrayCollection();
        $this->recipe_modalcontents         = new \Doctrine\Common\Collections\ArrayCollection();
        $this->recipe_bannercontents        = new \Doctrine\Common\Collections\ArrayCollection();
        $this->product_maincontents         = new \Doctrine\Common\Collections\ArrayCollection();
        $this->product_secondarycontents    = new \Doctrine\Common\Collections\ArrayCollection();
        $this->product_modalcontents        = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return ContentBlock
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
     * Set publishedState
     *
     * @param integer $publishedState
     * @return ContentBlock
     */
    public function setPublishedState($publishedState)
    {
        $this->publishedState = $publishedState;
    
        return $this;
    }

    /**
     * Get publishedState
     *
     * @return integer 
     */
    public function getPublishedState()
    {
        return $this->publishedState;
    }

    /**
     * Set availability
     *
     * @param string $availability
     * @return ContentBlock
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    
        return $this;
    }

    /**
     * Get availability
     *
     * @return string 
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set showTitle
     *
     * @param integer $showTitle
     * @return ContentBlock
     */
    public function setShowTitle($showTitle)
    {
        $this->showTitle = $showTitle;
    
        return $this;
    }

    /**
     * Get showTitle
     *
     * @return integer 
     */
    public function getShowTitle()
    {
        return $this->showTitle;
    }

    /**
     * Set ordering
     *
     * @param integer $ordering
     * @return ContentBlock
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;
    
        return $this;
    }

    /**
     * Get ordering
     *
     * @return integer 
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * Set className
     *
     * @param string $className
     * @return ContentBlock
     */
    public function setClassName($className)
    {
        $this->className = $className;
    
        return $this;
    }

    /**
     * Get className
     *
     * @return string 
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * Set sizeClass
     *
     * @param string $sizeClass
     * @return ContentBlock
     */
    public function setSizeClass($sizeClass)
    {
        $this->sizeClass = $sizeClass;
    
        return $this;
    }

    /**
     * Get sizeClass
     *
     * @return string 
     */
    public function getSizeClass()
    {
        return $this->sizeClass;
    }

    /**
     * Set mediaSize
     *
     * @param string $mediaSize
     * @return ContentBlock
     */
    public function setMediaSize($mediaSize)
    {
        $this->mediaSize = $mediaSize;
    
        return $this;
    }

    /**
     * Get mediaSize
     *
     * @return string 
     */
    public function getMediaSize()
    {
        return $this->mediaSize;
    }

    /**
     * Set idName
     *
     * @param string $idName
     * @return ContentBlock
     */
    public function setIdName($idName)
    {
        $this->idName = $idName;
    
        return $this;
    }

    /**
     * Get idName
     *
     * @return string 
     */
    public function getIdName()
    {
        return $this->idName;
    }

    /**
     * Set contentType
     *
     * @param string $contentType
     * @return ContentBlock
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    
        return $this;
    }

    /**
     * Get contentType
     *
     * @return string 
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set htmlText
     *
     * @param string $htmlText
     * @return ContentBlock
     */
    public function setHtmlText($htmlText)
    {
        $this->htmlText = $htmlText;
    
        return $this;
    }

    /**
     * Get htmlText
     *
     * @return string 
     */
    public function getHtmlText()
    {
        return $this->htmlText;
    }

    /**
     * Add maincontents
     *
     * @param \BardisCMS\PageBundle\Entity\Page $maincontents
     * @return ContentBlock
     */
    public function addMaincontent(\BardisCMS\PageBundle\Entity\Page $maincontents)
    {
        $this->maincontents[] = $maincontents;
    
        return $this;
    }

    /**
     * Remove maincontents
     *
     * @param \BardisCMS\PageBundle\Entity\Page $maincontents
     */
    public function removeMaincontent(\BardisCMS\PageBundle\Entity\Page $maincontents)
    {
        $this->maincontents->removeElement($maincontents);
    }

    /**
     * Get maincontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMaincontents()
    {
        return $this->maincontents;
    }

    /**
     * Add blog_maincontents
     *
     * @param \BardisCMS\BlogBundle\Entity\Blog $blogMaincontents
     * @return ContentBlock
     */
    public function addBlogMaincontent(\BardisCMS\BlogBundle\Entity\Blog $blogMaincontents)
    {
        $this->blog_maincontents[] = $blogMaincontents;
    
        return $this;
    }

    /**
     * Remove blog_maincontents
     *
     * @param \BardisCMS\BlogBundle\Entity\Blog $blogMaincontents
     */
    public function removeBlogMaincontent(\BardisCMS\BlogBundle\Entity\Blog $blogMaincontents)
    {
        $this->blog_maincontents->removeElement($blogMaincontents);
    }

    /**
     * Get blog_maincontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlogMaincontents()
    {
        return $this->blog_maincontents;
    }

    /**
     * Add secondarycontents
     *
     * @param \BardisCMS\PageBundle\Entity\Page $secondarycontents
     * @return ContentBlock
     */
    public function addSecondarycontent(\BardisCMS\PageBundle\Entity\Page $secondarycontents)
    {
        $this->secondarycontents[] = $secondarycontents;
    
        return $this;
    }

    /**
     * Remove secondarycontents
     *
     * @param \BardisCMS\PageBundle\Entity\Page $secondarycontents
     */
    public function removeSecondarycontent(\BardisCMS\PageBundle\Entity\Page $secondarycontents)
    {
        $this->secondarycontents->removeElement($secondarycontents);
    }

    /**
     * Get secondarycontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSecondarycontents()
    {
        return $this->secondarycontents;
    }

    /**
     * Add extracontents
     *
     * @param \BardisCMS\PageBundle\Entity\Page $extracontents
     * @return ContentBlock
     */
    public function addExtracontent(\BardisCMS\PageBundle\Entity\Page $extracontents)
    {
        $this->extracontents[] = $extracontents;
    
        return $this;
    }

    /**
     * Remove extracontents
     *
     * @param \BardisCMS\PageBundle\Entity\Page $extracontents
     */
    public function removeExtracontent(\BardisCMS\PageBundle\Entity\Page $extracontents)
    {
        $this->extracontents->removeElement($extracontents);
    }

    /**
     * Get extracontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExtracontents()
    {
        return $this->extracontents;
    }

    /**
     * Add modalcontents
     *
     * @param \BardisCMS\PageBundle\Entity\Page $modalcontents
     * @return ContentBlock
     */
    public function addModalcontent(\BardisCMS\PageBundle\Entity\Page $modalcontents)
    {
        $this->modalcontents[] = $modalcontents;
    
        return $this;
    }

    /**
     * Remove modalcontents
     *
     * @param \BardisCMS\PageBundle\Entity\Page $modalcontents
     */
    public function removeModalcontent(\BardisCMS\PageBundle\Entity\Page $modalcontents)
    {
        $this->modalcontents->removeElement($modalcontents);
    }

    /**
     * Get modalcontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModalcontents()
    {
        return $this->modalcontents;
    }

    /**
     * Add blog_modalcontents
     *
     * @param \BardisCMS\BlogBundle\Entity\Blog $blogModalcontents
     * @return ContentBlock
     */
    public function addBlogModalcontent(\BardisCMS\BlogBundle\Entity\Blog $blogModalcontents)
    {
        $this->blog_modalcontents[] = $blogModalcontents;
    
        return $this;
    }

    /**
     * Remove blog_modalcontents
     *
     * @param \BardisCMS\BlogBundle\Entity\Blog $blogModalcontents
     */
    public function removeBlogModalcontent(\BardisCMS\BlogBundle\Entity\Blog $blogModalcontents)
    {
        $this->blog_modalcontents->removeElement($blogModalcontents);
    }

    /**
     * Get blog_modalcontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlogModalcontents()
    {
        return $this->blog_modalcontents;
    }

    /**
     * Add bannercontents
     *
     * @param \BardisCMS\PageBundle\Entity\Page $bannercontents
     * @return ContentBlock
     */
    public function addBannercontent(\BardisCMS\PageBundle\Entity\Page $bannercontents)
    {
        $this->bannercontents[] = $bannercontents;
    
        return $this;
    }

    /**
     * Remove bannercontents
     *
     * @param \BardisCMS\PageBundle\Entity\Page $bannercontents
     */
    public function removeBannercontent(\BardisCMS\PageBundle\Entity\Page $bannercontents)
    {
        $this->bannercontents->removeElement($bannercontents);
    }

    /**
     * Get bannercontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBannercontents()
    {
        return $this->bannercontents;
    }

    /**
     * Add blog_bannercontents
     *
     * @param \BardisCMS\BlogBundle\Entity\Blog $blogBannercontents
     * @return ContentBlock
     */
    public function addBlogBannercontent(\BardisCMS\BlogBundle\Entity\Blog $blogBannercontents)
    {
        $this->blog_bannercontents[] = $blogBannercontents;
    
        return $this;
    }

    /**
     * Remove blog_bannercontents
     *
     * @param \BardisCMS\BlogBundle\Entity\Blog $blogBannercontents
     */
    public function removeBlogBannercontent(\BardisCMS\BlogBundle\Entity\Blog $blogBannercontents)
    {
        $this->blog_bannercontents->removeElement($blogBannercontents);
    }

    /**
     * Get blog_bannercontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlogBannercontents()
    {
        return $this->blog_bannercontents;
    }

    /**
     * Add imageFiles
     *
     * @param \BardisCMS\PageBundle\Entity\ContentImage $imageFiles
     * @return ContentBlock
     */
    public function addImageFile(\BardisCMS\PageBundle\Entity\ContentImage $imageFiles)
    {
        $this->imageFiles[] = $imageFiles;
    
        return $this;
    }

    /**
     * Remove imageFiles
     *
     * @param \BardisCMS\PageBundle\Entity\ContentImage $imageFiles
     */
    public function removeImageFile(\BardisCMS\PageBundle\Entity\ContentImage $imageFiles)
    {
        $this->imageFiles->removeElement($imageFiles);
    }

    /**
     * Get imageFiles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImageFiles()
    {
        return $this->imageFiles;
    }
    
    /**
     * Set slide
     *
     * @param \BardisCMS\PageBundle\Entity\ContentSlide $slide
     * @return ContentBlock
     */
    public function setSlide(\BardisCMS\PageBundle\Entity\ContentSlide $slide = null)
    {
        $this->slide = $slide;
    
        return $this;
    }

    /**
     * Get slide
     *
     * @return \BardisCMS\PageBundle\Entity\ContentSlide 
     */
    public function getSlide()
    {
        return $this->slide;
    }    

    /**
     * Set fileFile
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $fileFile
     * @return ContentBlock
     */
    public function setFileFile(\Application\Sonata\MediaBundle\Entity\Media $fileFile = null)
    {
        $this->fileFile = $fileFile;
    
        return $this;
    }

    /**
     * Get fileFile
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getFileFile()
    {
        return $this->fileFile;
    }

    /**
     * Set vimeo
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $vimeo
     * @return ContentBlock
     */
    public function setVimeo(\Application\Sonata\MediaBundle\Entity\Media $vimeo = null)
    {
        $this->vimeo = $vimeo;
    
        return $this;
    }

    /**
     * Get vimeo
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getVimeo()
    {
        return $this->vimeo;
    }

    /**
     * Set youtube
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $youtube
     * @return ContentBlock
     */
    public function setYoutube(\Application\Sonata\MediaBundle\Entity\Media $youtube = null)
    {
        $this->youtube = $youtube;
    
        return $this;
    }

    /**
     * Get youtube
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getYoutube()
    {
        return $this->youtube;
    }/**
     * Add recipe_maincontents
     *
     * @param \BardisCMS\RecipeBundle\Entity\Recipe $recipeMaincontents
     * @return ContentBlock
     */
    public function addRecipeMaincontent(\BardisCMS\RecipeBundle\Entity\Recipe $recipeMaincontents)
    {
        $this->recipe_maincontents[] = $recipeMaincontents;
    
        return $this;
    }

    /**
     * Remove recipe_maincontents
     *
     * @param \BardisCMS\RecipeBundle\Entity\Recipe $recipeMaincontents
     */
    public function removeRecipeMaincontent(\BardisCMS\RecipeBundle\Entity\Recipe $recipeMaincontents)
    {
        $this->recipe_maincontents->removeElement($recipeMaincontents);
    }

    /**
     * Get recipe_maincontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecipeMaincontents()
    {
        return $this->recipe_maincontents;
    }

    /**
     * Add product_maincontents
     *
     * @param \BardisCMS\ProductBundle\Entity\Product $productMaincontents
     * @return ContentBlock
     */
    public function addProductMaincontent(\BardisCMS\ProductBundle\Entity\Product $productMaincontents)
    {
        $this->product_maincontents[] = $productMaincontents;
    
        return $this;
    }

    /**
     * Remove product_maincontents
     *
     * @param \BardisCMS\ProductBundle\Entity\Product $productMaincontents
     */
    public function removeProductMaincontent(\BardisCMS\ProductBundle\Entity\Product $productMaincontents)
    {
        $this->product_maincontents->removeElement($productMaincontents);
    }

    /**
     * Get product_maincontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductMaincontents()
    {
        return $this->product_maincontents;
    }

    /**
     * Add recipe_secondarycontents
     *
     * @param \BardisCMS\RecipeBundle\Entity\Recipe $recipeSecondarycontents
     * @return ContentBlock
     */
    public function addRecipeSecondarycontent(\BardisCMS\RecipeBundle\Entity\Recipe $recipeSecondarycontents)
    {
        $this->recipe_secondarycontents[] = $recipeSecondarycontents;
    
        return $this;
    }

    /**
     * Remove recipe_secondarycontents
     *
     * @param \BardisCMS\RecipeBundle\Entity\Recipe $recipeSecondarycontents
     */
    public function removeRecipeSecondarycontent(\BardisCMS\RecipeBundle\Entity\Recipe $recipeSecondarycontents)
    {
        $this->recipe_secondarycontents->removeElement($recipeSecondarycontents);
    }

    /**
     * Get recipe_secondarycontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecipeSecondarycontents()
    {
        return $this->recipe_secondarycontents;
    }

    /**
     * Add product_secondarycontents
     *
     * @param \BardisCMS\ProductBundle\Entity\Product $productSecondarycontents
     * @return ContentBlock
     */
    public function addProductSecondarycontent(\BardisCMS\ProductBundle\Entity\Product $productSecondarycontents)
    {
        $this->product_secondarycontents[] = $productSecondarycontents;
    
        return $this;
    }

    /**
     * Remove product_secondarycontents
     *
     * @param \BardisCMS\ProductBundle\Entity\Product $productSecondarycontents
     */
    public function removeProductSecondarycontent(\BardisCMS\ProductBundle\Entity\Product $productSecondarycontents)
    {
        $this->product_secondarycontents->removeElement($productSecondarycontents);
    }

    /**
     * Get product_secondarycontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductSecondarycontents()
    {
        return $this->product_secondarycontents;
    }

    /**
     * Add recipe_extracontents
     *
     * @param \BardisCMS\RecipeBundle\Entity\Recipe $recipeExtracontents
     * @return ContentBlock
     */
    public function addRecipeExtracontent(\BardisCMS\RecipeBundle\Entity\Recipe $recipeExtracontents)
    {
        $this->recipe_extracontents[] = $recipeExtracontents;
    
        return $this;
    }

    /**
     * Remove recipe_extracontents
     *
     * @param \BardisCMS\RecipeBundle\Entity\Recipe $recipeExtracontents
     */
    public function removeRecipeExtracontent(\BardisCMS\RecipeBundle\Entity\Recipe $recipeExtracontents)
    {
        $this->recipe_extracontents->removeElement($recipeExtracontents);
    }

    /**
     * Get recipe_extracontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecipeExtracontents()
    {
        return $this->recipe_extracontents;
    }

    /**
     * Add recipe_modalcontents
     *
     * @param \BardisCMS\RecipeBundle\Entity\Recipe $recipeModalcontents
     * @return ContentBlock
     */
    public function addRecipeModalcontent(\BardisCMS\RecipeBundle\Entity\Recipe $recipeModalcontents)
    {
        $this->recipe_modalcontents[] = $recipeModalcontents;
    
        return $this;
    }

    /**
     * Remove recipe_modalcontents
     *
     * @param \BardisCMS\RecipeBundle\Entity\Recipe $recipeModalcontents
     */
    public function removeRecipeModalcontent(\BardisCMS\RecipeBundle\Entity\Recipe $recipeModalcontents)
    {
        $this->recipe_modalcontents->removeElement($recipeModalcontents);
    }

    /**
     * Get recipe_modalcontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecipeModalcontents()
    {
        return $this->recipe_modalcontents;
    }

    /**
     * Add product_modalcontents
     *
     * @param \BardisCMS\ProductBundle\Entity\Product $productModalcontents
     * @return ContentBlock
     */
    public function addProductModalcontent(\BardisCMS\ProductBundle\Entity\Product $productModalcontents)
    {
        $this->product_modalcontents[] = $productModalcontents;
    
        return $this;
    }

    /**
     * Remove product_modalcontents
     *
     * @param \BardisCMS\ProductBundle\Entity\Product $productModalcontents
     */
    public function removeProductModalcontent(\BardisCMS\ProductBundle\Entity\Product $productModalcontents)
    {
        $this->product_modalcontents->removeElement($productModalcontents);
    }

    /**
     * Get product_modalcontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductModalcontents()
    {
        return $this->product_modalcontents;
    }

    /**
     * Add recipe_bannercontents
     *
     * @param \BardisCMS\RecipeBundle\Entity\Recipe $recipeBannercontents
     * @return ContentBlock
     */
    public function addRecipeBannercontent(\BardisCMS\RecipeBundle\Entity\Recipe $recipeBannercontents)
    {
        $this->recipe_bannercontents[] = $recipeBannercontents;
    
        return $this;
    }

    /**
     * Remove recipe_bannercontents
     *
     * @param \BardisCMS\RecipeBundle\Entity\Recipe $recipeBannercontents
     */
    public function removeRecipeBannercontent(\BardisCMS\RecipeBundle\Entity\Recipe $recipeBannercontents)
    {
        $this->recipe_bannercontents->removeElement($recipeBannercontents);
    }

    /**
     * Get recipe_bannercontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecipeBannercontents()
    {
        return $this->recipe_bannercontents;
    }

    /**
     * Add product_bannercontents
     *
     * @param \BardisCMS\ProductBundle\Entity\Product $productBannercontents
     * @return ContentBlock
     */
    public function addProductBannercontent(\BardisCMS\ProductBundle\Entity\Product $productBannercontents)
    {
        $this->product_bannercontents[] = $productBannercontents;
    
        return $this;
    }

    /**
     * Remove product_bannercontents
     *
     * @param \BardisCMS\ProductBundle\Entity\Product $productBannercontents
     */
    public function removeProductBannercontent(\BardisCMS\ProductBundle\Entity\Product $productBannercontents)
    {
        $this->product_bannercontents->removeElement($productBannercontents);
    }

    /**
     * Get product_bannercontents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductBannercontents()
    {
        return $this->product_bannercontents;
    }
    
    /**
    * toString PublishState
    *
    * @return string 
    */
    public function getPublishStateAsString()
    {
        switch($this->getPublishedState()){
            case(0): return "Unpublished";
            case(1): return "Published";
            case(2): return "Preview";
        }
    }
    
    /**
    * toString ShowTitle
    *
    * @return string 
    */
    public function getShowTitleAsString()
    {
        switch($this->getShowTitle()){
            case(0): return "Hidden";
            case(1): return "Visible";
        }
    }
    
    /**
    * toString ShowTitle
    *
    * @return string 
    */
    public function getContentTypeAsString()
    {
        switch($this->getContentType()){
            case('html'):       return "Text/HTML";
            case('image'):      return "Image";
            case('file'):       return "File Attachment";
            case('youtube'):    return "YouTube Video";
            case('vimeo'):      return "Vimeo Video";
        }
    }
}