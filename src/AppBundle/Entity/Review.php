<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\Recipe;
use AppBundle\Entity\User;
/**
 * Review
 * @ORM\Entity
 * @ORM\Table(name="Review")
 */
class Review
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *  @ORM\Column(type="string", length=255)
     */
    private $text;

    /**
     *  @ORM\Column(type="integer", length=25)
     */
    private $vote;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $creationdate;


    /**
     * @ORM\ManyToOne(targetEntity="Recipe")
     */
    private $recipe;


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
     * Set text
     *
     * @param string $text
     *
     * @return Review
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }


    /**
     * Set creationdate
     *
     * @param date $creationdate
     *
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
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set vote
     *
     * @param integer $vote
     *
     * @return Review
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return int
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return Review
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set recipe
     *
     * @param Recipe $recipe
     *
     * @return Review
     */
    public function setRecipe($recipe)
    {
        $this->recipe = $recipe;

        return $this;
    }

    /**
     * Get recipe
     *
     * @return integer
     */
    public function getRecipe()
    {
        return $this->recipe;
    }
}