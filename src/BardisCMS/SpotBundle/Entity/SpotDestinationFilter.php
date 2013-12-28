<?php

/*
 * Spot Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\SpotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BardisCMS\SpotBundle\Entity\Spot;
use Application\Sonata\MediaBundle\Entity\Media;


/**
 * BardisCMS\SpotBundle\Entity\SpotDestinationFilter
 *
 * @ORM\Table(name="spot_destinations")
 * @ORM\Entity
 */
class SpotDestinationFilter
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
    protected $class = null;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="spotDestinationFilterIcon")
     */ 
    protected $spotDestinationFilterIcon;

   /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\SpotBundle\Entity\Spot", mappedBy="spotDestinationFilters", cascade={"all"})
    */
    protected $spots;
	
    /**
     * @ORM\ManyToOne(targetEntity="BardisCMS\DestinationBundle\Entity\Destination")
     * @ORM\JoinColumn(name="destination", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $destination;	
	

    public function __construct()
    {
        $this->spots = new \Doctrine\Common\Collections\ArrayCollection();
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
			return (string)'New Spot Destination Filter';
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
     * @return SpotDestinationFilter
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
     * @return SpotDestinationFilter
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
     * Set spotDestinationFilterIcon
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $spotDestinationFilterIcon
     *
     * @return SpotDestinationFilter
     */
    public function setSpotDestinationFilterIcon(\Application\Sonata\MediaBundle\Entity\Media $spotDestinationFilterIcon = null)
    {
        $this->spotDestinationFilterIcon = $spotDestinationFilterIcon;
    
        return $this;
    }

    /**
     * Get spotDestinationFilterIcon
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getSpotDestinationFilterIcon()
    {
        return $this->spotDestinationFilterIcon;
    }

    /**
     * Add spots
     *
     * @param \BardisCMS\SpotBundle\Entity\Spot $spots
     *
     * @return SpotDestinationFilter
     */
    public function addSpot(\BardisCMS\SpotBundle\Entity\Spot $spots)
    {
        $this->spots[] = $spots;
    
        return $this;
    }

    /**
     * Remove spots
     *
     * @param \BardisCMS\SpotBundle\Entity\Spot $spots
     */
    public function removeSpot(\BardisCMS\SpotBundle\Entity\Spot $spots)
    {
        $this->spots->removeElement($spots);
    }

    /**
     * Get spots
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpots()
    {
        return $this->spots;
    }

    /**
     * Set destination
     *
     * @param \BardisCMS\DestinationBundle\Entity\Destination $destination
     *
     * @return SpotDestinationFilter
     */
    public function setDestination(\BardisCMS\DestinationBundle\Entity\Destination $destination = null)
    {
        $this->destination = $destination;
    
        return $this;
    }

    /**
     * Get destination
     *
     * @return \BardisCMS\DestinationBundle\Entity\Destination 
     */
    public function getDestination()
    {
        return $this->destination;
    }
}
