<?php

namespace BardisCMS\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BardisCMS\ProductBundle\Entity\Product;
use Application\Sonata\MediaBundle\Entity\Media;


/**
 * BardisCMS\ProductBundle\Entity\ProductCategory
 *
 * @ORM\Table(name="product_categories")
 * @ORM\Entity
 */
class ProductCategory
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
    * @ORM\ManyToMany(targetEntity="BardisCMS\ProductBundle\Entity\Product", mappedBy="categories", cascade={"all"})
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
     * Add Products
     *
     * @param BardisCMS\ProductBundle\Entity\Product $products
     * @return Category
     */
    public function addProduct(\BardisCMS\ProductBundle\Entity\Product $products)
    {
        $this->products[] = $products;
        return $this;
    }

    /**
     * Remove Products
     *
     * @param BardisCMS\ProductBundle\Entity\Product $products
     */
    public function removeProduct(\BardisCMS\ProductBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get Products
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
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
}