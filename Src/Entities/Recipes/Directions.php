<?php

namespace FridgeInventory\Src\Entities\Recipes;

class Directions implements DirectionsInterface
{

    /**
     * @var DirectionInterface[]
     */
    private $directions;

    /**
     * Directions constructor.
     * @param DirectionInterface[] $directions
     */
    public function __construct(DirectionInterface ...$directions)
    {
        $this->directions = $directions;
    }
}