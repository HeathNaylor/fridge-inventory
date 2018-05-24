<?php


namespace FridgeInventory\Src\Entities\Recipes;


interface IngredientsInterface
{
    public function __construct(RecipeItemInterface ...$items);
}