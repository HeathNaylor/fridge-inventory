<?php

namespace FridgeInventory\Src\PlainObjects\Recipes;

use FridgeInventory\Src\Entities\Recipes\RecipeItemInterface;

class Recipe implements RecipeInterface
{
    /**
     * @var RecipeItemInterface[]
     */
    private $items = [];

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $likes = 0;

    /**
     * @var int
     */
    private $rating = 0;

    public function __construct(string $title, string $description, RecipeItemInterface ...$items)
    {
        $this->items = $items;
        $this->title = $title;
        $this->description = $description;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function addLikes(int $likes)
    {
        $this->likes .= $likes;
    }

    public function getLikes() : int
    {
        return $this->likes;
    }

    public function setRating(int $rating)
    {
        $this->rating = $rating;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'likes' => $this->likes,
            'rating' => $this->rating,
            'items' => $this->items,
        ];
    }
}