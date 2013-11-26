<?php

/*
 * Comment Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\CommentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BardisCMS\BlogBundle\Entity\Blog;


/**
 * BardisCMS\CommentBundle\Entity\Comment
 *
 * @ORM\Table(name="comments")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="BardisCMS\CommentBundle\Repository\CommentRepository")
 */
class Comment
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
     * @ORM\Column(type="string")
     */
    protected $username;
	
	/**
     * @ORM\Column(type="text")
     */
    protected $comment;
	
	  /**
     * @ORM\Column(type="boolean")
     */
    protected $approved;	

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="string", length=255)
     */ 
    protected $commentType;
	
	/**
     * @ORM\ManyToOne(targetEntity="BardisCMS\BlogBundle\Entity\Blog", inversedBy="comments")
     * @ORM\JoinColumn(name="blog_id", referencedColumnName="id")
     */
    protected $blogPost;
	

    public function __construct()
    {
        $this->setCreated(new \DateTime());

        $this->setApproved(true);
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
     * @return Comment
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
     * Set username
     *
     * @param string $username
     *
     * @return Comment
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set approved
     *
     * @param boolean $approved
     *
     * @return Comment
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;
    
        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean 
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Comment
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set commentType
     *
     * @param string $title
     * @return Comment
     */
    public function setCommentType($commentType)
    {
        $this->commentType = $commentType;
        return $this;
    }

    /**
     * Get commentType
     *
     * @return string 
     */
    public function getCommentType()
    {
        return $this->commentType;
    }

    /**
     * Set blogPost
     *
     * @param \BardisCMS\BlogBundle\Entity\Blog $blogPost
     *
     * @return Comment
     */
    public function setBlogPost(\BardisCMS\BlogBundle\Entity\Blog $blogPost = null)
    {
        $this->blogPost = $blogPost;
    
        return $this;
    }

    /**
     * Get blogPost
     *
     * @return \BardisCMS\BlogBundle\Entity\Blog 
     */
    public function getBlogPost()
    {
        return $this->blogPost;
    }
    
    /**
    * toString
    *
    * @return string 
    */	
    public function __toString()
    {
		if($this->getTitle()){
			return (string)$this->getTitle();			
		}
		else{
			return (string)'New Comment';
		}
    }
    
    /**
    * toString Approved
    *
    * @return string 
    */
    public function getApprovedAsString()
    {
        switch($this->getApproved()){
            case('0'):  return "Unpublished";
            case('1'):  return "Approved";
            default:    return $this->getApproved(); 
        }
    }
    
    /**
    * toString commentType
    *
    * @return string 
    */
    public function getCommentTypeAsString()
    {
        switch($this->getCommentType()){
            case('Blog'):       return "Blog Post";
            default:            return $this->getCommentType(); 
        }
    }
}
