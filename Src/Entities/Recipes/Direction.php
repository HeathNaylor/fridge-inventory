<?php

namespace FridgeInventory\Src\Entities\Recipes;

class Direction implements DirectionInterface
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var bool
     */
    private $done = false;

    public function __construct(string $description)
    {

        $this->description = $description;
    }

    public function markDone()
    {
        $this->done = true;
    }

    public function markNotDone()
    {
        $this->done = false;
    }

    public function isDone(): bool
    {
        return $this->done;
    }
}