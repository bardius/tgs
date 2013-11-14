<?php

namespace BardisCMS\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Sonata\MediaBundle\Entity\Media;
use BardisCMS\PageBundle\Entity\ContentBlock;


/**
 * BardisCMS\PageBundle\Entity\ContentImage
 *
 * @ORM\Table(name="content_images")
 * @ORM\Entity
 */
class ContentImage
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	/**
    * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", orphanRemoval=true, cascade={"persist", "remove"})
    * @ORM\JoinColumn(name="imagefile", onDelete="CASCADE")
    */ 
    protected $imagefile;

    /**
     * @ORM\Column(type="integer")
     */ 
    protected $imageOrder = 99;

     /**
     * @ORM\ManyToMany(targetEntity="ContentBlock", mappedBy="imageFiles", cascade={"persist"})
     */
    protected $contentblocks;

   
    public function __construct()
    {
        $this->contentblocks = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set imagefile
     *
     * @param Application\Sonata\MediaBundle\Entity\Media $imagefile
     * @return ContentImage
     */
    public function setImagefile(\Application\Sonata\MediaBundle\Entity\Media $imagefile = null)
    {
        $this->imagefile = $imagefile;
        return $this;
    }

    /**
     * Get imagefile
     *
     * @return Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getImagefile()
    {
        return $this->imagefile;
    }

    /**
     * Set contentblock
     *
     * @param BardisCMS\PageBundle\Entity\ContentBlock $contentblock
     * @return ContentImage
     */
    public function setContentblock(\BardisCMS\PageBundle\Entity\ContentBlock $contentblock = null)
    {
        $this->contentblock = $contentblock;
        return $this;
    }

    /**
     * Get contentblock
     *
     * @return BardisCMS\PageBundle\Entity\ContentBlock 
     */
    public function getContentblock()
    {
        return $this->contentblock;
    }

    /**
     * Set contentblock_id
     *
     * @param BardisCMS\PageBundle\Entity\ContentBlock $contentblockId
     * @return ContentImage
     */
    public function setContentblockId(\BardisCMS\PageBundle\Entity\ContentBlock $contentblockId = null)
    {
        $this->contentblock_id = $contentblockId;
        return $this;
    }

    /**
     * Get contentblock_id
     *
     * @return BardisCMS\PageBundle\Entity\ContentBlock 
     */
    public function getContentblockId()
    {
        return $this->contentblock_id;
    }

    /**
     * Add contentblocks
     *
     * @param BardisCMS\PageBundle\Entity\ContentBlock $contentblocks
     * @return ContentImage
     */
    public function addContentblock(\BardisCMS\PageBundle\Entity\ContentBlock $contentblocks)
    {
        $this->contentblocks[] = $contentblocks;
        return $this;
    }

    /**
     * Remove contentblocks
     *
     * @param BardisCMS\PageBundle\Entity\ContentBlock $contentblocks
     */
    public function removeContentblock(\BardisCMS\PageBundle\Entity\ContentBlock $contentblocks)
    {
        $this->contentblocks->removeElement($contentblocks);
    }

    /**
     * Get contentblocks
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getContentblocks()
    {
        return $this->contentblocks;
    }

    /**
     * Set imageOrder
     *
     * @param integer $imageOrder
     * @return ContentImage
     */
    public function setImageOrder($imageOrder)
    {
        $this->imageOrder = $imageOrder;
    
        return $this;
    }

    /**
     * Get imageOrder
     *
     * @return integer 
     */
    public function getImageOrder()
    {
        return $this->imageOrder;
    }
}