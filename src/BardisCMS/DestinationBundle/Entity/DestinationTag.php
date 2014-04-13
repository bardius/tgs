<?php

namespace BardisCMS\DestinationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use BardisCMS\DestinationBundle\Entity\Destination;
use Application\Sonata\MediaBundle\Entity\Media;


/**
 * BardisCMS\DestinationBundle\Entity\DestinationTag
 *
 * @ORM\Table(name="destination_tags")
 * @ORM\Entity
 */
class DestinationTag
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
    protected $tagCategory;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $styleColor = null;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="tagIcon")
     */ 
    protected $tagIcon;

   /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\DestinationBundle\Entity\Destination", mappedBy="tags", cascade={"all"})
    */
    protected $destinations;
	
	/**
     * @ORM\Column(name="date_last_modified", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $dateLastModified;


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
     *
     * @return DestinationTag
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
     *
     * @return DestinationTag
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
     *
     * @return DestinationTag
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
     * Add destinations
     *
     * @param \BardisCMS\DestinationBundle\Entity\Destination $destinations
     *
     * @return DestinationTag
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
     * Set styleColor
     *
     * @param string $styleColor
     *
     * @return DestinationTag
     */
    public function setStyleColor($styleColor)
    {
        $this->styleColor = $styleColor;
    
        return $this;
    }

    /**
     * Get styleColor
     *
     * @return string 
     */
    public function getStyleColor()
    {
        return $this->styleColor;
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
			return (string)'New Destination Tag';
		}
    }
    
    /**
    * toString tagCategory
    *
    * @return string 
    */
    public function getTagCategoryAsString()
    {
        switch($this->getTagCategory()){
			case('sports'):		return "Sports";
            default:            return $this->getTagCategory();
        }
    }
}
