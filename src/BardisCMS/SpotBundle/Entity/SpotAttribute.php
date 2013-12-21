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
 * BardisCMS\SpotBundle\Entity\SpotAttribute
 *
 * @ORM\Table(name="spot_attributes")
 * @ORM\Entity
 */
class SpotAttribute
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $nearestAirport = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $nearestTown = null;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $publicTransportation = 0;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $accessProblem = 0;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $surfClub = 0;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $lessons = 0;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $rental = 0;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $storage = 0;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $repair = 0;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $gearshop = 0;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $rescue = 0;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $snacksAndDrinks = 0;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $parking = 0;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $toilets = 0;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $showers = 0;

    /**
     * @ORM\Column(type="array")
     */  
    protected $accommodation;

    /**
     * @ORM\Column(type="array")
     */  
    protected $budget;

    /**
     * @ORM\Column(type="array")
     */  
    protected $spotType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $shoreType = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $bottom = null;

    /**
     * @ORM\Column(type="array")
     */  
    protected $sports;

    /**
     * @ORM\Column(type="array")
     */  
    protected $experience;

    /**
     * @ORM\Column(type="array")
     */  
    protected $style;

    /**
     * @ORM\Column(type="array")
     */  
    protected $crowded;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $dangers = null;

    /**
     * @ORM\Column(type="array")
     */  
    protected $windDirection;

    /**
     * @ORM\Column(type="array")
     */  
    protected $bestWindDirection;

    /**
     * @ORM\Column(type="array")
     */  
    protected $windForce;

    /**
     * @ORM\Column(type="array")
     */  
    protected $relative;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $blowingTime = null;

    /**
     * @ORM\Column(type="array")
     */  
    protected $seaState;

    /**
     * @ORM\Column(type="array")
     */  
    protected $swellType;

    /**
     * @ORM\Column(type="array")
     */  
    protected $swellDirection;

    /**
     * @ORM\Column(type="array")
     */  
    protected $swellLength;

    /**
     * @ORM\Column(type="array")
     */  
    protected $pointBreak;

    /**
     * @ORM\Column(type="array")
     */  
    protected $tide;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $waterQuality = null;

    /**
     * @ORM\Column(type="array")
     */
    protected $season;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $seaTemperature = null;

    /**
     * @ORM\Column(type="boolean")
     */   
    protected $nightlife = 0;


    /**
     * @ORM\Column(type="boolean")
     */   
    protected $family = 0;


    /**
     * @ORM\Column(type="boolean")
     */   
    protected $restaurants = 0;


    public function __construct()
    {
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
			return (string)'New Spot Attribute';
		}
    }
    
    /**
    * toString PublicTransportation
    *
    * @return string 
    */
    public function getPublicTransportationAsString()
    {
        switch($this->getPublicTransportation()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString AccessProblem
    *
    * @return string 
    */
    public function getAccessProblemAsString()
    {
        switch($this->getAccessProblem()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString SurfClub
    *
    * @return string 
    */
    public function getSurfClubAsString()
    {
        switch($this->getSurfClub()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString Lessons
    *
    * @return string 
    */
    public function getLessonsAsString()
    {
        switch($this->getLessons()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString Rental
    *
    * @return string 
    */
    public function getRentalAsString()
    {
        switch($this->getRental()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString Storage
    *
    * @return string 
    */
    public function getStorageAsString()
    {
        switch($this->getStorage()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString Repair
    *
    * @return string 
    */
    public function getRepairAsString()
    {
        switch($this->getRepair()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString Gearshop
    *
    * @return string 
    */
    public function getGearshopAsString()
    {
        switch($this->getGearshop()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString Rescue
    *
    * @return string 
    */
    public function getRescueAsString()
    {
        switch($this->getRescue()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString SnacksAndDrinks
    *
    * @return string 
    */
    public function getSnacksAndDrinksAsString()
    {
        switch($this->getSnacksAndDrinks()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString Parking
    *
    * @return string 
    */
    public function getParkingAsString()
    {
        switch($this->getParking()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString Toilets
    *
    * @return string 
    */
    public function getToiletsAsString()
    {
        switch($this->getToilets()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString Showers
    *
    * @return string 
    */
    public function getShowersAsString()
    {
        switch($this->getShowers()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString Nightlife
    *
    * @return string 
    */
    public function getNightlifeAsString()
    {
        switch($this->getNightlife()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString Family
    *
    * @return string 
    */
    public function getFamilyAsString()
    {
        switch($this->getFamily()){
            case(0): return "No";
            case(1): return "Yes";
        }
    }
    
    /**
    * toString Restaurants
    *
    * @return string 
    */
    public function getRestaurantsAsString()
    {
        switch($this->getRestaurants()){
            case(0): return "No";
            case(1): return "Yes";
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
     * Set nearestAirport
     *
     * @param string $nearestAirport
     *
     * @return SpotAttribute
     */
    public function setNearestAirport($nearestAirport)
    {
        $this->nearestAirport = $nearestAirport;
    
        return $this;
    }

    /**
     * Get nearestAirport
     *
     * @return string 
     */
    public function getNearestAirport()
    {
        return $this->nearestAirport;
    }

    /**
     * Set nearestTown
     *
     * @param string $nearestTown
     *
     * @return SpotAttribute
     */
    public function setNearestTown($nearestTown)
    {
        $this->nearestTown = $nearestTown;
    
        return $this;
    }

    /**
     * Get nearestTown
     *
     * @return string 
     */
    public function getNearestTown()
    {
        return $this->nearestTown;
    }

    /**
     * Set publicTransportation
     *
     * @param boolean $publicTransportation
     *
     * @return SpotAttribute
     */
    public function setPublicTransportation($publicTransportation)
    {
        $this->publicTransportation = $publicTransportation;
    
        return $this;
    }

    /**
     * Get publicTransportation
     *
     * @return boolean 
     */
    public function getPublicTransportation()
    {
        return $this->publicTransportation;
    }

    /**
     * Set accessProblem
     *
     * @param boolean $accessProblem
     *
     * @return SpotAttribute
     */
    public function setAccessProblem($accessProblem)
    {
        $this->accessProblem = $accessProblem;
    
        return $this;
    }

    /**
     * Get accessProblem
     *
     * @return boolean 
     */
    public function getAccessProblem()
    {
        return $this->accessProblem;
    }

    /**
     * Set surfClub
     *
     * @param boolean $surfClub
     *
     * @return SpotAttribute
     */
    public function setSurfClub($surfClub)
    {
        $this->surfClub = $surfClub;
    
        return $this;
    }

    /**
     * Get surfClub
     *
     * @return boolean 
     */
    public function getSurfClub()
    {
        return $this->surfClub;
    }

    /**
     * Set lessons
     *
     * @param boolean $lessons
     *
     * @return SpotAttribute
     */
    public function setLessons($lessons)
    {
        $this->lessons = $lessons;
    
        return $this;
    }

    /**
     * Get lessons
     *
     * @return boolean 
     */
    public function getLessons()
    {
        return $this->lessons;
    }

    /**
     * Set rental
     *
     * @param boolean $rental
     *
     * @return SpotAttribute
     */
    public function setRental($rental)
    {
        $this->rental = $rental;
    
        return $this;
    }

    /**
     * Get rental
     *
     * @return boolean 
     */
    public function getRental()
    {
        return $this->rental;
    }

    /**
     * Set storage
     *
     * @param boolean $storage
     *
     * @return SpotAttribute
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;
    
        return $this;
    }

    /**
     * Get storage
     *
     * @return boolean 
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Set repair
     *
     * @param boolean $repair
     *
     * @return SpotAttribute
     */
    public function setRepair($repair)
    {
        $this->repair = $repair;
    
        return $this;
    }

    /**
     * Get repair
     *
     * @return boolean 
     */
    public function getRepair()
    {
        return $this->repair;
    }

    /**
     * Set gearshop
     *
     * @param boolean $gearshop
     *
     * @return SpotAttribute
     */
    public function setGearshop($gearshop)
    {
        $this->gearshop = $gearshop;
    
        return $this;
    }

    /**
     * Get gearshop
     *
     * @return boolean 
     */
    public function getGearshop()
    {
        return $this->gearshop;
    }

    /**
     * Set rescue
     *
     * @param boolean $rescue
     *
     * @return SpotAttribute
     */
    public function setRescue($rescue)
    {
        $this->rescue = $rescue;
    
        return $this;
    }

    /**
     * Get rescue
     *
     * @return boolean 
     */
    public function getRescue()
    {
        return $this->rescue;
    }

    /**
     * Set snacksAndDrinks
     *
     * @param boolean $snacksAndDrinks
     *
     * @return SpotAttribute
     */
    public function setSnacksAndDrinks($snacksAndDrinks)
    {
        $this->snacksAndDrinks = $snacksAndDrinks;
    
        return $this;
    }

    /**
     * Get snacksAndDrinks
     *
     * @return boolean 
     */
    public function getSnacksAndDrinks()
    {
        return $this->snacksAndDrinks;
    }

    /**
     * Set parking
     *
     * @param boolean $parking
     *
     * @return SpotAttribute
     */
    public function setParking($parking)
    {
        $this->parking = $parking;
    
        return $this;
    }

    /**
     * Get parking
     *
     * @return boolean 
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set toilets
     *
     * @param boolean $toilets
     *
     * @return SpotAttribute
     */
    public function setToilets($toilets)
    {
        $this->toilets = $toilets;
    
        return $this;
    }

    /**
     * Get toilets
     *
     * @return boolean 
     */
    public function getToilets()
    {
        return $this->toilets;
    }

    /**
     * Set showers
     *
     * @param boolean $showers
     *
     * @return SpotAttribute
     */
    public function setShowers($showers)
    {
        $this->showers = $showers;
    
        return $this;
    }

    /**
     * Get showers
     *
     * @return boolean 
     */
    public function getShowers()
    {
        return $this->showers;
    }

    /**
     * Set accommodation
     *
     * @param array $accommodation
     *
     * @return SpotAttribute
     */
    public function setAccommodation($accommodation)
    {
        $this->accommodation = $accommodation;
    
        return $this;
    }

    /**
     * Get accommodation
     *
     * @return array 
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * Set budget
     *
     * @param array $budget
     *
     * @return SpotAttribute
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    
        return $this;
    }

    /**
     * Get budget
     *
     * @return array 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set spotType
     *
     * @param array $spotType
     *
     * @return SpotAttribute
     */
    public function setSpotType($spotType)
    {
        $this->spotType = $spotType;
    
        return $this;
    }

    /**
     * Get spotType
     *
     * @return array 
     */
    public function getSpotType()
    {
        return $this->spotType;
    }

    /**
     * Set shoreType
     *
     * @param string $shoreType
     *
     * @return SpotAttribute
     */
    public function setShoreType($shoreType)
    {
        $this->shoreType = $shoreType;
    
        return $this;
    }

    /**
     * Get shoreType
     *
     * @return string 
     */
    public function getShoreType()
    {
        return $this->shoreType;
    }

    /**
     * Set bottom
     *
     * @param string $bottom
     *
     * @return SpotAttribute
     */
    public function setBottom($bottom)
    {
        $this->bottom = $bottom;
    
        return $this;
    }

    /**
     * Get bottom
     *
     * @return string 
     */
    public function getBottom()
    {
        return $this->bottom;
    }

    /**
     * Set sports
     *
     * @param array $sports
     *
     * @return SpotAttribute
     */
    public function setSports($sports)
    {
        $this->sports = $sports;
    
        return $this;
    }

    /**
     * Get sports
     *
     * @return array 
     */
    public function getSports()
    {
        return $this->sports;
    }

    /**
     * Set experience
     *
     * @param array $experience
     *
     * @return SpotAttribute
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    
        return $this;
    }

    /**
     * Get experience
     *
     * @return array 
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set style
     *
     * @param array $style
     *
     * @return SpotAttribute
     */
    public function setStyle($style)
    {
        $this->style = $style;
    
        return $this;
    }

    /**
     * Get style
     *
     * @return array 
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set crowded
     *
     * @param array $crowded
     *
     * @return SpotAttribute
     */
    public function setCrowded($crowded)
    {
        $this->crowded = $crowded;
    
        return $this;
    }

    /**
     * Get crowded
     *
     * @return array 
     */
    public function getCrowded()
    {
        return $this->crowded;
    }

    /**
     * Set dangers
     *
     * @param string $dangers
     *
     * @return SpotAttribute
     */
    public function setDangers($dangers)
    {
        $this->dangers = $dangers;
    
        return $this;
    }

    /**
     * Get dangers
     *
     * @return string 
     */
    public function getDangers()
    {
        return $this->dangers;
    }

    /**
     * Set windDirection
     *
     * @param array $windDirection
     *
     * @return SpotAttribute
     */
    public function setWindDirection($windDirection)
    {
        $this->windDirection = $windDirection;
    
        return $this;
    }

    /**
     * Get windDirection
     *
     * @return array 
     */
    public function getWindDirection()
    {
        return $this->windDirection;
    }

    /**
     * Set bestWindDirection
     *
     * @param array $bestWindDirection
     *
     * @return SpotAttribute
     */
    public function setBestWindDirection($bestWindDirection)
    {
        $this->bestWindDirection = $bestWindDirection;
    
        return $this;
    }

    /**
     * Get bestWindDirection
     *
     * @return array 
     */
    public function getBestWindDirection()
    {
        return $this->bestWindDirection;
    }

    /**
     * Set windForce
     *
     * @param array $windForce
     *
     * @return SpotAttribute
     */
    public function setWindForce($windForce)
    {
        $this->windForce = $windForce;
    
        return $this;
    }

    /**
     * Get windForce
     *
     * @return array 
     */
    public function getWindForce()
    {
        return $this->windForce;
    }

    /**
     * Set relative
     *
     * @param array $relative
     *
     * @return SpotAttribute
     */
    public function setRelative($relative)
    {
        $this->relative = $relative;
    
        return $this;
    }

    /**
     * Get relative
     *
     * @return array 
     */
    public function getRelative()
    {
        return $this->relative;
    }

    /**
     * Set blowingTime
     *
     * @param string $blowingTime
     *
     * @return SpotAttribute
     */
    public function setBlowingTime($blowingTime)
    {
        $this->blowingTime = $blowingTime;
    
        return $this;
    }

    /**
     * Get blowingTime
     *
     * @return string 
     */
    public function getBlowingTime()
    {
        return $this->blowingTime;
    }

    /**
     * Set seaState
     *
     * @param array $seaState
     *
     * @return SpotAttribute
     */
    public function setSeaState($seaState)
    {
        $this->seaState = $seaState;
    
        return $this;
    }

    /**
     * Get seaState
     *
     * @return array 
     */
    public function getSeaState()
    {
        return $this->seaState;
    }

    /**
     * Set swellType
     *
     * @param array $swellType
     *
     * @return SpotAttribute
     */
    public function setSwellType($swellType)
    {
        $this->swellType = $swellType;
    
        return $this;
    }

    /**
     * Get swellType
     *
     * @return array 
     */
    public function getSwellType()
    {
        return $this->swellType;
    }

    /**
     * Set swellDirection
     *
     * @param array $swellDirection
     *
     * @return SpotAttribute
     */
    public function setSwellDirection($swellDirection)
    {
        $this->swellDirection = $swellDirection;
    
        return $this;
    }

    /**
     * Get swellDirection
     *
     * @return array 
     */
    public function getSwellDirection()
    {
        return $this->swellDirection;
    }

    /**
     * Set swellLength
     *
     * @param array $swellLength
     *
     * @return SpotAttribute
     */
    public function setSwellLength($swellLength)
    {
        $this->swellLength = $swellLength;
    
        return $this;
    }

    /**
     * Get swellLength
     *
     * @return array 
     */
    public function getSwellLength()
    {
        return $this->swellLength;
    }

    /**
     * Set pointBreak
     *
     * @param array $pointBreak
     *
     * @return SpotAttribute
     */
    public function setPointBreak($pointBreak)
    {
        $this->pointBreak = $pointBreak;
    
        return $this;
    }

    /**
     * Get pointBreak
     *
     * @return array 
     */
    public function getPointBreak()
    {
        return $this->pointBreak;
    }

    /**
     * Set tide
     *
     * @param array $tide
     *
     * @return SpotAttribute
     */
    public function setTide($tide)
    {
        $this->tide = $tide;
    
        return $this;
    }

    /**
     * Get tide
     *
     * @return array 
     */
    public function getTide()
    {
        return $this->tide;
    }

    /**
     * Set waterQuality
     *
     * @param string $waterQuality
     *
     * @return SpotAttribute
     */
    public function setWaterQuality($waterQuality)
    {
        $this->waterQuality = $waterQuality;
    
        return $this;
    }

    /**
     * Get waterQuality
     *
     * @return string 
     */
    public function getWaterQuality()
    {
        return $this->waterQuality;
    }

    /**
     * Set season
     *
     * @param array $season
     *
     * @return SpotAttribute
     */
    public function setSeason($season)
    {
        $this->season = $season;
    
        return $this;
    }

    /**
     * Get season
     *
     * @return array 
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set seaTemperature
     *
     * @param string $seaTemperature
     *
     * @return SpotAttribute
     */
    public function setSeaTemperature($seaTemperature)
    {
        $this->seaTemperature = $seaTemperature;
    
        return $this;
    }

    /**
     * Get seaTemperature
     *
     * @return string 
     */
    public function getSeaTemperature()
    {
        return $this->seaTemperature;
    }

    /**
     * Set nightlife
     *
     * @param boolean $nightlife
     *
     * @return SpotAttribute
     */
    public function setNightlife($nightlife)
    {
        $this->nightlife = $nightlife;
    
        return $this;
    }

    /**
     * Get nightlife
     *
     * @return boolean 
     */
    public function getNightlife()
    {
        return $this->nightlife;
    }

    /**
     * Set family
     *
     * @param boolean $family
     *
     * @return SpotAttribute
     */
    public function setFamily($family)
    {
        $this->family = $family;
    
        return $this;
    }

    /**
     * Get family
     *
     * @return boolean 
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set restaurants
     *
     * @param boolean $restaurants
     *
     * @return SpotAttribute
     */
    public function setRestaurants($restaurants)
    {
        $this->restaurants = $restaurants;
    
        return $this;
    }

    /**
     * Get restaurants
     *
     * @return boolean 
     */
    public function getRestaurants()
    {
        return $this->restaurants;
    }
}
