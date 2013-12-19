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
 * BardisCMS\SpotBundle\Entity\SpotDestination
 *
 * @ORM\Table(name="spot_destinations")
 * @ORM\Entity
 */
class SpotDestination
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
    protected $spotdestinationClass = null;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="spotdestinationIcon")
     */ 
    protected $spotdestinationIcon;

   /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\SpotBundle\Entity\Spot", mappedBy="spotDestinations", cascade={"all"})
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
     * @return SpotDestination
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
     * Set spotdestinationClass
     *
     * @param string $spotdestinationClass
     *
     * @return SpotDestination
     */
    public function setSpotdestinationClass($spotdestinationClass)
    {
        $this->spotdestinationClass = $spotdestinationClass;
    
        return $this;
    }

    /**
     * Get spotdestinationClass
     *
     * @return string 
     */
    public function getSpotdestinationClass()
    {
        return $this->spotdestinationClass;
    }

    /**
     * Set spotdestinationIcon
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $spotdestinationIcon
     *
     * @return SpotDestination
     */
    public function setSpotdestinationIcon(\Application\Sonata\MediaBundle\Entity\Media $spotdestinationIcon = null)
    {
        $this->spotdestinationIcon = $spotdestinationIcon;
    
        return $this;
    }

    /**
     * Get spotdestinationIcon
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getSpotdestinationIcon()
    {
        return $this->spotdestinationIcon;
    }

    /**
     * Add spots
     *
     * @param \BardisCMS\SpotBundle\Entity\Spot $spots
     *
     * @return SpotDestination
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
     * @return SpotDestination
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
