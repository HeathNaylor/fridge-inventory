<?php

namespace FridgeInventory\Src\Entities\Recipes;

class Ingredients implements IngredientsInterface
{
    /**
     * @var RecipeItemInterface[]
     */
    private $ingredients;

    /**
     * Ingredients constructor.
     * @param RecipeItemInterface[] $items
     */
    public function __construct(RecipeItemInterface ...$items)
    {
        $this->ingredients = $items;
    }

    /**
     * @return RecipeItemInterface[]
     */
    public function getIngredients(): array
    {
        return $this->ingredients;
    }
}