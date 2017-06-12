<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
  * @ORM\Entity
 * @ORM\Table(name="Recipe")
 */

class Recipe
{
     /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=50 , unique=true)
     */
    private $title;

     /**
      * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;
	
	 /**
     * @ORM\Column(type="string")
     */
    private $creationdate;

     /**
     * @ORM\Column(type="string", length=10)
     */
    private $difficulty;

     /**
     * @ORM\Column(type="string", length=10)
     */
    private $time;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descr;

     /**
     * @ORM\Column(type="string", length=25)
     */
    private $category;

    /**
     * @ORM\Column(type="float")
     */
    private $average = -1;

    /**
     * @ORM\Column(type="integer")
     */
    private $count = 0;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagePath;


    /**
     * Get id
     *
     * @return int
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
     * @return Recipe
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
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count){
        $this->count = $count;
    }

    /**
     * Get average
     *
     * @return float
     */
    public function getAverage()
    {
       // $this->average = 3.5;
        return $this->average;
    }

    public function setAverage($avg){
        $this->average = $avg;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return Recipe
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer
     */
    public function getUser()
    {
        return $this->user;
    }
	
	 /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Recipe
     */
    public function setCreationdate($creationdate)
    {
        $this->creationdate = $creationdate;

        return $this;
    }
	
	 /**
     * Get creationdate
     *
     * @return \DateTime
     */
    public function getCreationdate()
    {
        return $this->creationdate;
    }

    /**
     * Set difficulty
     *
     * @param string $difficulty
     *
     * @return Recipe
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return string
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return Recipe
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Recipe
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->descr = substr($description,0,355);
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
     * Get descr
     *
     * @return string
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Recipe
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set imagePath
     *
     * @param string $title
     *
     * @return ImagePath
     */
    public function setImagePath($path)
    {
        $this->imagePath = $path;

        return $this;
    }

    /**
     * Get imagePath
     *
     * @return string
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

}