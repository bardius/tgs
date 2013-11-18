<?php

namespace BardisCMS\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Sonata\MediaBundle\Entity\Media;
use Application\Sonata\UserBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use BardisCMS\ContentBlockBundle\Entity\ContentBlock;
use BardisCMS\ProductBundle\Entity\ProductCategory;
use BardisCMS\ProductBundle\Entity\ProductTag;


/**
 * BardisCMS\ProductBundle\Entity\Product
 *
 * @ORM\Table(name="products")
 * @DoctrineAssert\UniqueEntity(fields="alias", message="Alias must be unique")
 * @ORM\Entity(repositoryClass="BardisCMS\ProductBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\Column(type="integer")
     */ 
    protected $productOrder = 99;

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
     * @ORM\JoinColumn(name="bgimage", onDelete="SET NULL")
     */ 
    protected $bgimage;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="productimage", onDelete="SET NULL")
     */ 
    protected $productimage;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="productlistimage", onDelete="SET NULL")
     */ 
    protected $productlistimage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $intromediasize = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $introclass = null;

    /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\ProductBundle\Entity\ProductCategory", inversedBy="products", cascade={"persist"})
    * @ORM\JoinTable(name="products_categories")
    */
    protected $categories;

    /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\ProductBundle\Entity\ProductTag", inversedBy="products", cascade={"persist"})
    * @ORM\JoinTable(name="products_tags")
    */
    protected $tags;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $pagetype = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */ 
    protected $summary = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $productsRange = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $manufacturersPartNo1 = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $manufacturersPartNo2 = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $manufacturersPartNo3 = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $packageSize1 = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $packageSize2 = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $packageSize3 = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $topArrowText = null;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */   
    protected $displayFairtrade;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */   
    protected $displayInRange;
   
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ContentBlockBundle\Entity\ContentBlock", inversedBy="product_maincontents", cascade={"persist"})
     * @ORM\JoinTable(name="product_maincontent_blocks")
     **/
    protected $maincontentblocks;

   
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ContentBlockBundle\Entity\ContentBlock", inversedBy="product_secondarycontents", cascade={"persist"})
     * @ORM\JoinTable(name="product_secondarycontent_blocks")
     **/
    protected $secondarycontentblocks;


    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ContentBlockBundle\Entity\ContentBlock", inversedBy="product_modalcontents", cascade={"persist"})
     * @ORM\JoinTable(name="product_modalcontent_blocks")
     **/
    protected $modalcontentblocks;
    
    /**
     * @ORM\ManyToOne(targetEntity="BardisCMS\ProductBundle\Entity\Product", cascade={"persist"})
     * @ORM\JoinColumn(name="featuredProduct", onDelete="SET NULL")
     */ 
    protected $featuredProduct;
    

    public function __construct() {
        $this->modalcontentblocks 		= new \Doctrine\Common\Collections\ArrayCollection();
        $this->maincontentblocks 		= new \Doctrine\Common\Collections\ArrayCollection();
        $this->secondarycontentblocks 		= new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Products
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
     * @return Products
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
     * @return Products
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
     * @return Products
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
     * Set productOrder
     *
     * @param integer $productOrder
     * @return Products
     */
    public function setProductOrder($productOrder)
    {
        $this->productOrder = $productOrder;
    
        return $this;
    }

    /**
     * Get productOrder
     *
     * @return integer 
     */
    public function getProductOrder()
    {
        return $this->productOrder;
    }

    /**
     * Set showPageTitle
     *
     * @param integer $showPageTitle
     * @return Products
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
     * @return Products
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
     * @return Products
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
     * Set description
     *
     * @param string $description
     * @return Products
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
     * Set keywords
     *
     * @param string $keywords
     * @return Products
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
     * @return Products
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
     * Set summary
     *
     * @param string $summary
     * @return Products
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
     * Set topArrowText
     *
     * @param string $topArrowText
     * @return Products
     */
    public function setTopArrowText($topArrowText)
    {
        $this->topArrowText = $topArrowText;
    
        return $this;
    }

    /**
     * Get topArrowText
     *
     * @return string 
     */
    public function getTopArrowText()
    {
        return $this->topArrowText;
    }

    /**
     * Set productsRange
     *
     * @param string $productsRange
     * @return Products
     */
    public function setProductsRange($productsRange)
    {
        $this->productsRange = $productsRange;
    
        return $this;
    }

    /**
     * Get productsRange
     *
     * @return string 
     */
    public function getProductsRange()
    {
        return $this->productsRange;
    }

    
    /**
     * Set manufacturersPartNo1
     *
     * @param string $manufacturersPartNo1
     * @return Products
     */
    public function setManufacturersPartNo1($manufacturersPartNo1)
    {
        $this->manufacturersPartNo1 = $manufacturersPartNo1;
    
        return $this;
    }

    /**
     * Get manufacturersPartNo1
     *
     * @return string 
     */
    public function getManufacturersPartNo1()
    {
        return $this->manufacturersPartNo1;
    }

    /**
     * Set manufacturersPartNo2
     *
     * @param string $manufacturersPartNo2
     * @return Products
     */
    public function setManufacturersPartNo2($manufacturersPartNo2)
    {
        $this->manufacturersPartNo2 = $manufacturersPartNo2;
    
        return $this;
    }

    /**
     * Get manufacturersPartNo2
     *
     * @return string 
     */
    public function getManufacturersPartNo2()
    {
        return $this->manufacturersPartNo2;
    }

    /**
     * Set manufacturersPartNo3
     *
     * @param string $manufacturersPartNo3
     * @return Products
     */
    public function setManufacturersPartNo3($manufacturersPartNo3)
    {
        $this->manufacturersPartNo3 = $manufacturersPartNo3;
    
        return $this;
    }

    /**
     * Get manufacturersPartNo3
     *
     * @return string 
     */
    public function getManufacturersPartNo3()
    {
        return $this->manufacturersPartNo3;
    }

    /**
     * Set packageSize1
     *
     * @param string $packageSize1
     * @return Products
     */
    public function setPackageSize1($packageSize1)
    {
        $this->packageSize1 = $packageSize1;
    
        return $this;
    }

    /**
     * Get packageSize1
     *
     * @return string 
     */
    public function getPackageSize1()
    {
        return $this->packageSize1;
    }

    /**
     * Set packageSize2
     *
     * @param string $packageSize2
     * @return Products
     */
    public function setPackageSize2($packageSize2)
    {
        $this->packageSize2 = $packageSize2;
    
        return $this;
    }

    /**
     * Get packageSize2
     *
     * @return string 
     */
    public function getPackageSize2()
    {
        return $this->packageSize2;
    }

    /**
     * Set packageSize3
     *
     * @param string $packageSize3
     * @return Products
     */
    public function setPackageSize3($packageSize3)
    {
        $this->packageSize3 = $packageSize3;
    
        return $this;
    }

    /**
     * Get packageSize3
     *
     * @return string 
     */
    public function getPackageSize3()
    {
        return $this->packageSize3;
    }

    
    /**
     * Set displayInRange
     *
     * @param integer $displayInRange
     * @return Products
     */
    public function setDisplayInRange($displayInRange)
    {
        $this->displayInRange = $displayInRange;
    
        return $this;
    }

    /**
     * Get displayInRange
     *
     * @return integer 
     */
    public function getDisplayInRange()
    {
        return $this->displayInRange;
    }

    /**
     * Set displayFairtrade
     *
     * @param integer $displayFairtrade
     * @return Products
     */
    public function setDisplayFairtrade($displayFairtrade)
    {
        $this->displayFairtrade = $displayFairtrade;
    
        return $this;
    }

    /**
     * Get displayFairtrade
     *
     * @return integer 
     */
    public function getDisplayFairtrade()
    {
        return $this->displayFairtrade;
    }

    /**
     * Set intromediasize
     *
     * @param string $intromediasize
     * @return Products
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
     * @return Products
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
     * @return Products
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
     * @return Products
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
     * Set featuredProduct
     *
     * @param \BardisCMS\ProductBundle\Entity\Product $featuredProduct
     * @return Products
     */
    public function setFeaturedProduct(\BardisCMS\ProductBundle\Entity\Product $featuredProduct = null)
    {
        $this->featuredProduct = $featuredProduct;
    
        return $this;
    }

    /**
     * Get featuredProduct
     *
     * @return \BardisCMS\ProductBundle\Entity\Product 
     */
    public function getFeaturedProduct()
    {
        return $this->featuredProduct;
    }

    /**
     * Set introimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $introimage
     * @return Products
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
     * Set bgimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $bgimage
     * @return Products
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
     * Set productimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $productimage
     * @return Products
     */
    public function setProductimage(\Application\Sonata\MediaBundle\Entity\Media $productimage = null)
    {
        $this->productimage = $productimage;
    
        return $this;
    }

    /**
     * Get productimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getProductimage()
    {
        return $this->productimage;
    }
    
    
    /**
     * Set productlistimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $productlistimage
     * @return Products
     */
    public function setProductlistimage(\Application\Sonata\MediaBundle\Entity\Media $productlistimage = null)
    {
        $this->productlistimage = $productlistimage;
    
        return $this;
    }

    /**
     * Get productlistimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getProductlistimage()
    {
        return $this->productlistimage;
    }

    /**
     * Add categories
     *
     * @param \BardisCMS\ProductBundle\Entity\ProductCategory $categories
     * @return Products
     */
    public function addCategory(\BardisCMS\ProductBundle\Entity\ProductCategory $categories)
    {
        $this->categories[] = $categories;
    
        return $this;
    }

    /**
     * Remove categories
     *
     * @param \BardisCMS\ProductBundle\Entity\ProductCategory $categories
     */
    public function removeCategory(\BardisCMS\ProductBundle\Entity\ProductCategory $categories)
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
     * @param \BardisCMS\ProductBundle\Entity\ProductTag $tags
     * @return Products
     */
    public function addTag(\BardisCMS\ProductBundle\Entity\ProductTag $tags)
    {
        $this->tags[] = $tags;
    
        return $this;
    }

    /**
     * Remove tags
     *
     * @param \BardisCMS\ProductBundle\Entity\ProductTag $tags
     */
    public function removeTag(\BardisCMS\ProductBundle\Entity\ProductTag $tags)
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
     * @param \BardisCMS\ContentBlockBundle\Entity\ContentBlock $maincontentblocks
     * @return Products
     */
    public function addMaincontentblock(\BardisCMS\ContentBlockBundle\Entity\ContentBlock $maincontentblocks)
    {
        $this->maincontentblocks[] = $maincontentblocks;
    
        return $this;
    }

    /**
     * Remove maincontentblocks
     *
     * @param \BardisCMS\ContentBlockBundle\Entity\ContentBlock $maincontentblocks
     */
    public function removeMaincontentblock(\BardisCMS\ContentBlockBundle\Entity\ContentBlock $maincontentblocks)
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
     * Add secondarycontentblocks
     *
     * @param \BardisCMS\ContentBlockBundle\Entity\ContentBlock $secondarycontentblocks
     * @return Products
     */
    public function addSecondarycontentblock(\BardisCMS\ContentBlockBundle\Entity\ContentBlock $secondarycontentblocks)
    {
        $this->secondarycontentblocks[] = $secondarycontentblocks;
    
        return $this;
    }

    /**
     * Remove secondarycontentblocks
     *
     * @param \BardisCMS\ContentBlockBundle\Entity\ContentBlock $secondarycontentblocks
     */
    public function removeSecondarycontentblock(\BardisCMS\ContentBlockBundle\Entity\ContentBlock $secondarycontentblocks)
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
     * Add modalcontentblocks
     *
     * @param \BardisCMS\ContentBlockBundle\Entity\ContentBlock $modalcontentblocks
     * @return Products
     */
    public function addModalcontentblock(\BardisCMS\ContentBlockBundle\Entity\ContentBlock $modalcontentblocks)
    {
        $this->modalcontentblocks[] = $modalcontentblocks;
    
        return $this;
    }

    /**
     * Remove modalcontentblocks
     *
     * @param \BardisCMS\ContentBlockBundle\Entity\ContentBlock $modalcontentblocks
     */
    public function removeModalcontentblock(\BardisCMS\ContentBlockBundle\Entity\ContentBlock $modalcontentblocks)
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
            case('product_article'):        return "Product Article";
            case('product_cat_page'):       return "Product Category";
            case('product_filtered_list'):  return "Product Filtered Results";
            case('product_home'):           return "Product Homepage";
            default:                        return $this->getPagetype(); 
        }
    }
}