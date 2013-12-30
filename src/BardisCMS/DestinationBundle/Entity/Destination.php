<?php

namespace BardisCMS\DestinationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Sonata\MediaBundle\Entity\Media;
use Application\Sonata\UserBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use BardisCMS\ContentBlockBundle\Entity\ContentBlock;
use BardisCMS\DestinationBundle\Entity\DestinationCategory;
use BardisCMS\DestinationBundle\Entity\DestinationTag;


/**
 * BardisCMS\DestinationBundle\Entity\Destination
 *
 * @ORM\Table(name="destinations")
 * @DoctrineAssert\UniqueEntity(fields="alias", message="Alias must be unique")
 * @ORM\Entity(repositoryClass="BardisCMS\DestinationBundle\Repository\DestinationRepository")
 */
class Destination
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
    protected $pageClass = null;

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
    protected $introText = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */ 
    protected $summary = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */ 
    protected $directions = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $mapLatitude = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $mapLongitude = null;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="introimage", onDelete="SET NULL")
     */ 
    protected $introImage;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="destinationicon", onDelete="SET NULL")
     */ 
    protected $destinationIcon;

    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="bgimage", onDelete="SET NULL")
     */ 
    protected $bgImage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $introClass = null;
	
    /**
     * @ORM\ManyToOne(targetEntity="BardisCMS\SpotBundle\Entity\Spot")
     * @ORM\JoinColumn(name="spots", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $spots;

    /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\DestinationBundle\Entity\DestinationCategory", inversedBy="destinations", cascade={"persist"})
    * @ORM\JoinTable(name="destinations_categories")
    */
    protected $categories;

    /**
    * @ORM\ManyToMany(targetEntity="BardisCMS\DestinationBundle\Entity\DestinationTag", inversedBy="destinations", cascade={"persist"})
    * @ORM\JoinTable(name="destinations_tags")
    */
    protected $tags;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $pageType = null;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $styleColor = null;
   
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ContentBlockBundle\Entity\ContentBlock", inversedBy="destination_maincontents", cascade={"persist"})
     * @ORM\JoinTable(name="destination_maincontent_blocks")
     **/
    protected $maincontentblocks;

   
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ContentBlockBundle\Entity\ContentBlock", inversedBy="destination_secondarycontents", cascade={"persist"})
     * @ORM\JoinTable(name="destination_secondarycontent_blocks")
     **/
    protected $secondarycontentblocks;

   
    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ContentBlockBundle\Entity\ContentBlock", inversedBy="destination_bannercontents", cascade={"persist"})
     * @ORM\JoinTable(name="destination_bannercontent_blocks")
     **/
    protected $bannercontentblocks;


    /**
     * @ORM\ManyToMany(targetEntity="BardisCMS\ContentBlockBundle\Entity\ContentBlock", inversedBy="destination_modalcontents", cascade={"persist"})
     * @ORM\JoinTable(name="destination_modalcontent_blocks")
     **/
    protected $modalcontentblocks;
    

    public function __construct() {
        $this->modalcontentblocks 		= new \Doctrine\Common\Collections\ArrayCollection();
        $this->maincontentblocks 		= new \Doctrine\Common\Collections\ArrayCollection();
        $this->secondarycontentblocks 	= new \Doctrine\Common\Collections\ArrayCollection();
        $this->bannercontentblocks 		= new \Doctrine\Common\Collections\ArrayCollection();
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
			return (string)'New Destination Page';
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
    * toString Pagetype
    *
    * @return string 
    */
    public function getPagetypeAsString()
    {
        switch($this->getPagetype()){
            case('destination_article'):         return "Destination Article";
            case('destination_filtered_list'):   return "Destination Filtered Results";
            case('destination_cat_page'):        return "Destination Category Page";
            case('destination_home'):            return "Destination Homepage";
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
     * @return Destination
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
     * @return Destination
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
     * @return Destination
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
     * @return Destination
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
     * Set showPageTitle
     *
     * @param integer $showPageTitle
     *
     * @return Destination
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
     * @return Destination
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
     * Set pageClass
     *
     * @param string $pageClass
     *
     * @return Destination
     */
    public function setPageClass($pageClass)
    {
        $this->pageClass = $pageClass;
    
        return $this;
    }

    /**
     * Get pageClass
     *
     * @return string 
     */
    public function getPageClass()
    {
        return $this->pageClass;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Destination
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
     * @return Destination
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
     * Set introText
     *
     * @param string $introText
     *
     * @return Destination
     */
    public function setIntroText($introText)
    {
        $this->introText = $introText;
    
        return $this;
    }

    /**
     * Get introText
     *
     * @return string 
     */
    public function getIntroText()
    {
        return $this->introText;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return Destination
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
     * Set directions
     *
     * @param string $directions
     *
     * @return Destination
     */
    public function setDirections($directions)
    {
        $this->directions = $directions;
    
        return $this;
    }

    /**
     * Get directions
     *
     * @return string 
     */
    public function getDirections()
    {
        return $this->directions;
    }

    /**
     * Set mapLatitude
     *
     * @param string $mapLatitude
     *
     * @return Destination
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
     * @return Destination
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
     * Set introClass
     *
     * @param string $introClass
     *
     * @return Destination
     */
    public function setIntroClass($introClass)
    {
        $this->introClass = $introClass;
    
        return $this;
    }

    /**
     * Get introClass
     *
     * @return string 
     */
    public function getIntroClass()
    {
        return $this->introClass;
    }

    /**
     * Set pageType
     *
     * @param string $pageType
     *
     * @return Destination
     */
    public function setPageType($pageType)
    {
        $this->pageType = $pageType;
    
        return $this;
    }

    /**
     * Get pageType
     *
     * @return string 
     */
    public function getPageType()
    {
        return $this->pageType;
    }

    /**
     * Set styleColor
     *
     * @param string $styleColor
     *
     * @return Destination
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
     * Set author
     *
     * @param \Application\Sonata\UserBundle\Entity\User $author
     *
     * @return Destination
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
     * Set introImage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $introImage
     *
     * @return Destination
     */
    public function setIntroImage(\Application\Sonata\MediaBundle\Entity\Media $introImage = null)
    {
        $this->introImage = $introImage;
    
        return $this;
    }

    /**
     * Get introImage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getIntroImage()
    {
        return $this->introImage;
    }

    /**
     * Set destinationIcon
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $destinationIcon
     *
     * @return Destination
     */
    public function setDestinationIcon(\Application\Sonata\MediaBundle\Entity\Media $destinationIcon = null)
    {
        $this->destinationIcon = $destinationIcon;
    
        return $this;
    }

    /**
     * Get destinationIcon
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getDestinationIcon()
    {
        return $this->destinationIcon;
    }

    /**
     * Set bgImage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $bgImage
     *
     * @return Destination
     */
    public function setBgImage(\Application\Sonata\MediaBundle\Entity\Media $bgImage = null)
    {
        $this->bgImage = $bgImage;
    
        return $this;
    }

    /**
     * Get bgImage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getBgImage()
    {
        return $this->bgImage;
    }

    /**
     * Set spots
     *
     * @param \BardisCMS\SpotBundle\Entity\Spot $spots
     *
     * @return Destination
     */
    public function setSpots(\BardisCMS\SpotBundle\Entity\Spot $spots = null)
    {
        $this->spots = $spots;
    
        return $this;
    }

    /**
     * Get spots
     *
     * @return \BardisCMS\SpotBundle\Entity\Spot 
     */
    public function getSpots()
    {
        return $this->spots;
    }

    /**
     * Add categories
     *
     * @param \BardisCMS\DestinationBundle\Entity\DestinationCategory $categories
     *
     * @return Destination
     */
    public function addCategory(\BardisCMS\DestinationBundle\Entity\DestinationCategory $categories)
    {
        $this->categories[] = $categories;
    
        return $this;
    }

    /**
     * Remove categories
     *
     * @param \BardisCMS\DestinationBundle\Entity\DestinationCategory $categories
     */
    public function removeCategory(\BardisCMS\DestinationBundle\Entity\DestinationCategory $categories)
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
     * @param \BardisCMS\DestinationBundle\Entity\DestinationTag $tags
     *
     * @return Destination
     */
    public function addTag(\BardisCMS\DestinationBundle\Entity\DestinationTag $tags)
    {
        $this->tags[] = $tags;
    
        return $this;
    }

    /**
     * Remove tags
     *
     * @param \BardisCMS\DestinationBundle\Entity\DestinationTag $tags
     */
    public function removeTag(\BardisCMS\DestinationBundle\Entity\DestinationTag $tags)
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
     *
     * @return Destination
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
     * @return Destination
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
     * @return Destination
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
     * @return Destination
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
