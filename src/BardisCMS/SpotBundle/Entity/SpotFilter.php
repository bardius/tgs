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
use Gedmo\Mapping\Annotation as Gedmo;
use BardisCMS\SpotBundle\Entity\Spot;
use Application\Sonata\MediaBundle\Entity\Media;


/**
 * BardisCMS\SpotBundle\Entity\SpotTag
 *
 * @ORM\Table(name="spot_filters")
 * @ORM\Entity
 */
class SpotFilter
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
    protected $filterCategory;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="filterIcon")
     */ 
    protected $filterIcon;

   /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\SpotBundle\Entity\Spot", mappedBy="spotFilters", cascade={"all"})
    */
    protected $spots;
	
	/**
     * @ORM\Column(name="date_last_modified", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $dateLastModified;
	

    public function __construct()
    {
        $this->spots = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return SpotFilter
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
     * Set filterCategory
     *
     * @param string $filterCategory
     *
     * @return SpotFilter
     */
    public function setFilterCategory($filterCategory)
    {
        $this->filterCategory = $filterCategory;
    
        return $this;
    }

    /**
     * Get filterCategory
     *
     * @return string 
     */
    public function getFilterCategory()
    {
        return $this->filterCategory;
    }

    /**
     * Set filterIcon
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $filterIcon
     *
     * @return SpotFilter
     */
    public function setFilterIcon(\Application\Sonata\MediaBundle\Entity\Media $filterIcon = null)
    {
        $this->filterIcon = $filterIcon;
    
        return $this;
    }

    /**
     * Get filterIcon
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getFilterIcon()
    {
        return $this->filterIcon;
    }

    /**
     * Add spots
     *
     * @param \BardisCMS\SpotBundle\Entity\Spot $spots
     *
     * @return SpotFilter
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
	 * Get dateLastModified
	 *
	 * @return integer 
	 */
    public function getDateLastModified()
    {
        return $this->dateLastModified;
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
			return (string)'New Spot Filter';
		}
    }
    
    /**
    * toString filterCategory
    *
    * @return string 
    */
    public function getFilterCategoryAsString()
    {
        switch($this->getFilterCategory()){
            case('amenities'):		return "Amenities/Facilities";
            case('budget'):			return "Budget";
            case('experience'):		return "Experience";
            case('lifestyle'):		return "Lifestyle";
            case('season'):			return "Season";
            case('sea_state'):		return "Sea State";
            case('sport'):			return "Sport";
            case('style'):			return "Style";
            case('swell_length'):	return "Swell Length";
            case('wind_force'):		return "Wind Force";
            default:				return $this->getFilterCategory();
        }
    }
}
