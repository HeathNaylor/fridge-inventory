<?php

namespace FridgeInventory\Src\UseCases;

use FridgeInventory\Src\Entities\Recipes\Recipe as RecipeEntity;
use FridgeInventory\Src\PlainObjects\Recipes\Recipe as RecipeObject;
use FridgeInventory\Src\PlainObjects\Recipes\RecipeInterface;

class Recipe
{
    /**
     * @param RecipeInterface $recipe
     * @param int $rating
     * @return RecipeObject
     */
    public function rate(RecipeInterface $recipe, int $rating) : RecipeInterface
    {
        $entity = new RecipeEntity($recipe->title(), $recipe->description());

        if($entity->rate($rating)){
            $recipe->setRating($rating);
        }

        return $recipe;
    }

    /**
     * @param RecipeInterface $recipe
     * @return RecipeInterface
     */
    public function like(RecipeInterface $recipe) : RecipeInterface
    {
        $entity = new RecipeEntity($recipe->title(), $recipe->description());

        if($entity->like()){
            $recipe->addLikes(1);
        }

        return $recipe;
    }
}