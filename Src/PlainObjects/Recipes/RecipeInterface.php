<?php

namespace FridgeInventory\Src\PlainObjects\Recipes;

use FridgeInventory\Src\Entities\Recipes\RecipeItemInterface;

interface RecipeInterface extends \JsonSerializable
{
    public function __construct(string $title, string $description, RecipeItemInterface ...$items);

    public function title() : string;

    public function description() : string;

    public function addLikes(int $likes);

    public function getLikes() : int;

    public function setRating(int $rating);
}