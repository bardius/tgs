<?php

namespace Maynard\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Maynard\ProductBundle\Entity\Product;
use Application\Sonata\MediaBundle\Entity\Media;


/**
 * Maynard\ProductBundle\Entity\ProductTag
 *
 * @ORM\Table(name="product_tags")
 * @ORM\Entity
 */
class ProductTag
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
     * @ORM\Column(type="string", length=255)
     */ 
    protected $tagCategory;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="tagIcon")
     */ 
    protected $tagIcon;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="smallIcon")
     */ 
    protected $smallIcon;

   /**
    * @ORM\ManyToMany(targetEntity="Maynard\ProductBundle\Entity\Product", mappedBy="tags", cascade={"all"})
    */
    protected $products;

    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set smallIcon
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $smallIcon
     * @return Tag
     */
    public function setSmallIcon(\Application\Sonata\MediaBundle\Entity\Media $smallIcon = null)
    {
        $this->smallIcon = $smallIcon;
    
        return $this;
    }

    /**
     * Get smallIcon
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getSmallIcon()
    {
        return $this->smallIcon;
    }

    /**
     * Add Products
     *
     * @param \Maynard\ProductBundle\Entity\Product $products
     * @return Tag
     */
    public function addProduct(\Maynard\ProductBundle\Entity\Product $products)
    {
        $this->products[] = $products;
    
        return $this;
    }

    /**
     * Remove Product
     *
     * @param \Maynard\ProductBundle\Entity\Product $products
     */
    public function removeProduct(\Maynard\ProductBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get Product
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRProducts()
    {
        return $this->products;
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
            case('sugar_type'):         return "Sugar Type";
            case('excellent_for'):      return "Excellent For";
            case('body'):               return "Body";
            case('product_featured'):   return "Perfect For Product";
            default:                    return $this->getTagCategory();
        }
    }
}