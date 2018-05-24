<?php

namespace FridgeInventory\Src\Entities\Recipes;

use FridgeInventory\Src\Entities\ItemInterface;

class RecipeItem implements RecipeItemInterface
{
    /**
     * @var ItemInterface
     */
    private $item;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var string
     */
    private $notes;

    public function __construct(ItemInterface $item, int $quantity, string $notes = null)
    {
        $this->item = $item;
        $this->quantity = $quantity;
        $this->notes = $notes;
    }

    /**
     * @return ItemInterface
     */
    public function getItem(): ItemInterface
    {
        return $this->item;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return string
     */
    public function getNotes(): string
    {
        return $this->notes;
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
            'item' => $this->item,
            'quantity' => $this->quantity,
            'notes' => $this->notes,
        ];
    }
}