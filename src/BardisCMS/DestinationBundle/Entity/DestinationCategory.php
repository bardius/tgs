<?php

namespace BardisCMS\DestinationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BardisCMS\DestinationBundle\Entity\Destination;
use Application\Sonata\MediaBundle\Entity\Media;


/**
 * BardisCMS\DestinationBundle\Entity\Category
 *
 * @ORM\Table(name="destination_categories")
 * @ORM\Entity
 */
class DestinationCategory
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
    * @ORM\ManyToMany(targetEntity="BardisCMS\DestinationBundle\Entity\Destination", mappedBy="categories", cascade={"all"})
    */
    protected $destinations;

    public function __construct()
    {
        $this->destinations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add destinations
     *
     * @param BardisCMS\DestinationBundle\Entity\Destination $destinations
     * @return Category
     */
    public function addDestination(\BardisCMS\DestinationBundle\Entity\Destination $destinations)
    {
        $this->destinations[] = $destinations;
        return $this;
    }

    /**
     * Remove destinations
     *
     * @param BardisCMS\DestinationBundle\Entity\Destination $destinations
     */
    public function removeDestination(\BardisCMS\DestinationBundle\Entity\Destination $destinations)
    {
        $this->destinations->removeElement($destinations);
    }

    /**
     * Get Destination
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    
    /**
     * toString Title
     *
     * @return string 
     */
    public function __toString()
    {
		if($this->getTitle()){
			return (string)$this->getTitle();			
		}
		else{
			return (string)'New Destination Category';
		}
    }
}