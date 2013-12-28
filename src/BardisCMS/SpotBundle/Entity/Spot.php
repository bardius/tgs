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
use Application\Sonata\MediaBundle\Entity\Media;
use Application\Sonata\UserBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use BardisCMS\ContentBlockBundle\Entity\ContentBlock;
use BardisCMS\SpotBundle\Entity\SpotDestinationFilter;
use BardisCMS\SpotBundle\Entity\SpotFilter;


/**
 * BardisCMS\SpotBundle\Entity\Spot
 *
 * @ORM\Table(name="spots")
 * @DoctrineAssert\UniqueEntity(fields="alias", message="Alias must be unique")
 * @ORM\Entity(repositoryClass="BardisCMS\SpotBundle\Repository\SpotRepository")
 */
class Spot
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
    protected $spotOrder = 99;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */ 
    protected $showPageTitle = 1;

    /**
     * @ORM\Column(type="integer")
     */   
    protected $publishState = 0;	

    /**
     * @ORM\Column(type="integer")
     */   
    protected $featuredSpot = 0;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $pageclass = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $mapLatitude = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $mapLongitude = null;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $introclass = null;

    /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\SpotBundle\Entity\SpotDestinationFilter", inversedBy="spots", cascade={"persist"})
    * @ORM\JoinTable(name="spots_destinationfilters")
    */
    protected $spotDestinationFilters;

    /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\SpotBundle\Entity\SpotFilter", inversedBy="spots", cascade={"persist"})
    * @ORM\JoinTable(name="spots_spotfilters")
    */
    protected $spotFilters;

    /**
    * @ORM\OneToOne(targetEntity="BardisCMS\SpotBundle\Entity\SpotAttribute", cascade={"persist"})
    * @ORM\JoinColumn(name="spotattributes", onDelete="SET NULL")
    */ 
    protected $spotAttributes;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $pagetype = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */ 
    protected $summary = null;
   
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ContentBlockBundle\Entity\ContentBlock", inversedBy="spot_maincontents", cascade={"persist"})
     * @ORM\JoinTable(name="spots_maincontent_blocks")
     **/
    protected $maincontentblocks;

   
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ContentBlockBundle\Entity\ContentBlock", inversedBy="spot_secondarycontents", cascade={"persist"})
     * @ORM\JoinTable(name="spots_secondarycontent_blocks")
     **/
    protected $secondarycontentblocks;

   
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ContentBlockBundle\Entity\ContentBlock", inversedBy="spot_bannercontents", cascade={"persist"})
     * @ORM\JoinTable(name="spots_bannercontent_blocks")
     **/
    protected $bannercontentblocks;


    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ContentBlockBundle\Entity\ContentBlock", inversedBy="spot_modalcontents", cascade={"persist"})
     * @ORM\JoinTable(name="spots_modalcontent_blocks")
     **/
    protected $modalcontentblocks;
    

    public function __construct() {
        $this->modalcontentblocks 		= new \Doctrine\Common\Collections\ArrayCollection();
        $this->maincontentblocks 		= new \Doctrine\Common\Collections\ArrayCollection();
        $this->secondarycontentblocks 	= new \Doctrine\Common\Collections\ArrayCollection();
        $this->bannercontentblocks		= new \Doctrine\Common\Collections\ArrayCollection();
		$this->date						= new \DateTime();
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
			return (string)'New Spot Page';
		}
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
    * toString FeaturedSpot
    *
    * @return string 
    */
    public function getFeaturedSpotAsString()
    {
        switch($this->getFeaturedSpot()){
            case(0): return "No";
            case(1): return "Yes";
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
            case('spot_article'):		return "Spot Page";
            case('spot_home'):			return "Spot Home";
            default:					return $this->getPagetype(); 
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Spot
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
     *
     * @return Spot
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
     *
     * @return Spot
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
     *
     * @return Spot
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
     * Set spotOrder
     *
     * @param integer $spotOrder
     *
     * @return Spot
     */
    public function setSpotOrder($spotOrder)
    {
        $this->spotOrder = $spotOrder;
    
        return $this;
    }

    /**
     * Get spotOrder
     *
     * @return integer 
     */
    public function getSpotOrder()
    {
        return $this->spotOrder;
    }

    /**
     * Set showPageTitle
     *
     * @param integer $showPageTitle
     *
     * @return Spot
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
     *
     * @return Spot
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
     * Set featuredSpot
     *
     * @param integer $featuredSpot
     *
     * @return Spot
     */
    public function setFeaturedSpot($featuredSpot)
    {
        $this->featuredSpot = $featuredSpot;
    
        return $this;
    }

    /**
     * Get featuredSpot
     *
     * @return integer 
     */
    public function getFeaturedSpot()
    {
        return $this->featuredSpot;
    }

    /**
     * Set pageclass
     *
     * @param string $pageclass
     *
     * @return Spot
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
     * Set mapLatitude
     *
     * @param string $mapLatitude
     *
     * @return Spot
     */
    public function setMapLatitude($mapLatitude)
    {
        $this->mapLatitude = $mapLatitude;
    
        return $this;
    }

    /**
     * Get mapLatitude
     *
     * @return string 
     */
    public function getMapLatitude()
    {
        return $this->mapLatitude;
    }

    /**
     * Set mapLongitude
     *
     * @param string $mapLongitude
     *
     * @return Spot
     */
    public function setMapLongitude($mapLongitude)
    {
        $this->mapLongitude = $mapLongitude;
    
        return $this;
    }

    /**
     * Get mapLongitude
     *
     * @return string 
     */
    public function getMapLongitude()
    {
        return $this->mapLongitude;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Spot
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
     *
     * @return Spot
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
     *
     * @return Spot
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
     * Set introclass
     *
     * @param string $introclass
     *
     * @return Spot
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
     *
     * @return Spot
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
     * Set summary
     *
     * @param string $summary
     *
     * @return Spot
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
     * Set author
     *
     * @param \Application\Sonata\UserBundle\Entity\User $author
     *
     * @return Spot
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
     * Set introimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $introimage
     *
     * @return Spot
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
     * Add spotDestinationFilters
     *
     * @param \BardisCMS\SpotBundle\Entity\SpotDestinationFilter $spotDestinationFilters
     *
     * @return Spot
     */
    public function addSpotDestinationFilter(\BardisCMS\SpotBundle\Entity\SpotDestinationFilter $spotDestinationFilters)
    {
        $this->spotDestinationFilters[] = $spotDestinationFilters;
    
        return $this;
    }

    /**
     * Remove spotDestinationFilters
     *
     * @param \BardisCMS\SpotBundle\Entity\SpotDestinationFilter $spotDestinationFilters
     */
    public function removeSpotDestinationFilter(\BardisCMS\SpotBundle\Entity\SpotDestinationFilter $spotDestinationFilters)
    {
        $this->spotDestinationFilters->removeElement($spotDestinationFilters);
    }

    /**
     * Get spotDestinationFilters
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpotDestinationFilters()
    {
        return $this->spotDestinationFilters;
    }

    /**
     * Add spotFilters
     *
     * @param \BardisCMS\SpotBundle\Entity\SpotFilter $spotFilters
     *
     * @return Spot
     */
    public function addSpotFilter(\BardisCMS\SpotBundle\Entity\SpotFilter $spotFilters)
    {
        $this->spotFilters[] = $spotFilters;
    
        return $this;
    }

    /**
     * Remove spotFilters
     *
     * @param \BardisCMS\SpotBundle\Entity\SpotFilter $spotFilters
     */
    public function removeSpotFilter(\BardisCMS\SpotBundle\Entity\SpotFilter $spotFilters)
    {
        $this->spotFilters->removeElement($spotFilters);
    }

    /**
     * Get spotFilters
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpotFilters()
    {
        return $this->spotFilters;
    }

    /**
     * Set spotAttributes
     *
     * @param \BardisCMS\SpotBundle\Entity\SpotAttribute $spotAttributes
     *
     * @return Spot
     */
    public function setSpotAttributes(\BardisCMS\SpotBundle\Entity\SpotAttribute $spotAttributes = null)
    {
        $this->spotAttributes = $spotAttributes;
    
        return $this;
    }

    /**
     * Get spotAttributes
     *
     * @return \BardisCMS\SpotBundle\Entity\SpotAttribute 
     */
    public function getSpotAttributes()
    {
        return $this->spotAttributes;
    }

    /**
     * Add maincontentblocks
     *
     * @param \BardisCMS\ContentBlockBundle\Entity\ContentBlock $maincontentblocks
     *
     * @return Spot
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
     *
     * @return Spot
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
     * Add bannercontentblocks
     *
     * @param \BardisCMS\ContentBlockBundle\Entity\ContentBlock $bannercontentblocks
     *
     * @return Spot
     */
    public function addBannercontentblock(\BardisCMS\ContentBlockBundle\Entity\ContentBlock $bannercontentblocks)
    {
        $this->bannercontentblocks[] = $bannercontentblocks;
    
        return $this;
    }

    /**
     * Remove bannercontentblocks
     *
     * @param \BardisCMS\ContentBlockBundle\Entity\ContentBlock $bannercontentblocks
     */
    public function removeBannercontentblock(\BardisCMS\ContentBlockBundle\Entity\ContentBlock $bannercontentblocks)
    {
        $this->bannercontentblocks->removeElement($bannercontentblocks);
    }

    /**
     * Get bannercontentblocks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBannercontentblocks()
    {
        return $this->bannercontentblocks;
    }

    /**
     * Add modalcontentblocks
     *
     * @param \BardisCMS\ContentBlockBundle\Entity\ContentBlock $modalcontentblocks
     *
     * @return Spot
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
}
