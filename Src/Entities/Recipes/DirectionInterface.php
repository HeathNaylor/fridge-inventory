<?php


namespace FridgeInventory\Src\Entities\Recipes;


interface DirectionInterface
{
    public function __construct(string $description);

    public function markDone();

    public function markNotDone();

    public function isDone() : bool;
}