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
     * @ORM\ManyToOne(targetEntity="BardisCMS\DestinationBundle\Entity\Destination")
     * @ORM\JoinColumn(name="destinationListPage", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $destinationListPage;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $class = null;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="destinationCategoryIcon")
     */ 
    protected $icon;

   /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\DestinationBundle\Entity\Destination", mappedBy="categories", cascade={"all"})
    */
    protected $destinations;

    public function __construct()
    {
        $this->destinations = new \Doctrine\Common\Collections\ArrayCollection();
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
     *
     * @return DestinationCategory
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
     * Set class
     *
     * @param string $class
     *
     * @return DestinationCategory
     */
    public function setClass($class)
    {
        $this->class = $class;
    
        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set icon
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $icon
     *
     * @return DestinationCategory
     */
    public function setIcon(\Application\Sonata\MediaBundle\Entity\Media $icon = null)
    {
        $this->icon = $icon;
    
        return $this;
    }

    /**
     * Get icon
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Add destinations
     *
     * @param \BardisCMS\DestinationBundle\Entity\Destination $destinations
     *
     * @return DestinationCategory
     */
    public function addDestination(\BardisCMS\DestinationBundle\Entity\Destination $destinations)
    {
        $this->destinations[] = $destinations;
    
        return $this;
    }

    /**
     * Remove destinations
     *
     * @param \BardisCMS\DestinationBundle\Entity\Destination $destinations
     */
    public function removeDestination(\BardisCMS\DestinationBundle\Entity\Destination $destinations)
    {
        $this->destinations->removeElement($destinations);
    }

    /**
     * Get destinations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDestinations()
    {
        return $this->destinations;
    }
	
	
	
	
    
    /**
     * Set destinationListPage
     *
     * @param BardisCMS\DestinationBundle\Entity\Destination $destination
     * @return Menu
     */
    public function setDestinationListPage(\BardisCMS\DestinationBundle\Entity\Destination $destinationListPage = null)
    {
        $this->destinationListPage = $destinationListPage;
        return $this;
    }

    /**
     * Get destinationListPage
     *
     * @return BardisCMS\DestinationBundle\Entity\Destination 
     */
    public function getDestinationListPage()
    {
        return $this->destinationListPage;
    }
}
