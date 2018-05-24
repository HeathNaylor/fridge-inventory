<?php

namespace FridgeInventory\Src\Entities\Recipes;

interface RecipeInterface
{
    public function __construct(string $title, string $description, RecipeItemInterface ...$items);

    public function rate(int $rating) : bool;

    public function like() : bool;
}