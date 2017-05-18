<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\User;
use AppBundle\Entity\Review;

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
      * @ORM\ManyToMany(targetEntity="Ingredient")
      * @ORM\JoinTable(name="recipe_ingredient",
      *      joinColumns={@ORM\JoinColumn(name="recipe_id", referencedColumnName="id")},
      *      inverseJoinColumns={@ORM\JoinColumn(name="ingredient_id", referencedColumnName="id")}
      *      )
      */
    private $ingredients;

    public function __construct() {
        $this->ingredients = array();
    }

     /**
     * @ORM\Column(type="array")
     */
    private $quantity;

    /**
     * @ORM\Column(type="float")
     */
    private $average = -1;

    /**
     * @ORM\Column(type="integer")
     */
    private $count = 0;


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
        /*$em = $this->getDoctrine()->getManager();
        /*$query = $em->createQuery("
		SELECT COUNT(*)
		FROM AppBundle:Review rev
		WHERE rev.recipe = :index"
        )->setParameter('index', $this->id);
        $c = $query->getResult();*/

        //$this->count = 2;
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
     * @param date $creationdate
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
     * @return date
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
     * Set ingredients
     *
     * @param array $ingredients
     *
     * @return Recipe
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get ingredients
     *
     * @return array
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set quantity
     *
     * @param array $quantity
     *
     * @return Recipe
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return array
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}