<?php

namespace FridgeInventory\Src\Entities\Recipes;

class Recipe implements RecipeInterface
{
    /**
     * @var RecipeItemInterface[]
     */
    private $items = [];


    public function __construct(string $title, string $description, RecipeItemInterface ...$items)
    {
        $this->items = $items;
    }

    /**
     * @param int $rating
     * @return bool
     */
    public function rate(int $rating) : bool
    {
        return ($rating <= 5) ? true : false;
    }

    /**
     * @return bool
     */
    public function like() : bool
    {
        return true;
    }
}