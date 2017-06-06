<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\Recipe;
use AppBundle\Entity\Ingredient;

/**
 * IngredientRecipe
 * @ORM\Entity
 * @ORM\Table(name="IngredientRecipe")
 */
class Ingredient_recipe
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Ingredient")
     */
    private $ingredient;

    /**
     * @ORM\ManyToOne(targetEntity="Recipe")
     */
    private $recipe;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $quantity;


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
     * Set ingredient
     *
     * @param Ingredient $ingredient
     *
     * @return IngredientRecipe
     */
    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;
    
        return $this;
    }

    /**
     * Get ingredient
     *
     * @return Ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Set recipe
     *
     * @param Recipe $recipe
     *
     * @return IngredientRecipe
     */
    public function setRecipe($recipe)
    {
        $this->recipe = $recipe;
    
        return $this;
    }

    /**
     * Get recipe
     *
     * @return Recipe
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return IngredientRecipe
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}

