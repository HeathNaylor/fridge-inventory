<?php

namespace FridgeInventory\Src\Entities\TemperatureRegulators;

use FridgeInventory\Src\Entities\Item;

class TemperatureRegulatorAggregate
{
    /**
     * @var Item[]
     */
    private $items = [];

    /**
     * @param TemperatureRegulatorInterface ...$regulators
     */
    public function __construct(TemperatureRegulatorInterface ...$regulators)
    {
        foreach($regulators as $regulator) {
            $this->items = array_merge($this->items, $regulator->inventory());
        }
    }

    public function getItems()
    {
        return $this->items;
    }
}