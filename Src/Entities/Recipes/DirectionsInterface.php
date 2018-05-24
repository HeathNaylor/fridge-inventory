<?php

namespace FridgeInventory\Src\Entities\Recipes;

interface DirectionsInterface
{
    public function __construct(DirectionInterface ...$directions);
}