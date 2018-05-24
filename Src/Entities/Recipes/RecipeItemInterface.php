<?php

namespace FridgeInventory\Src\Entities\Recipes;

use FridgeInventory\Src\Entities\ItemInterface;

interface RecipeItemInterface extends \JsonSerializable
{
    public function __construct(ItemInterface $item, int $quantity, string $notes = null);

    /**
     * @return ItemInterface
     */
    public function getItem(): ItemInterface;

    /**
     * @return int
     */
    public function getQuantity(): int;

    /**
     * @return string
     */
    public function getNotes(): string;
}