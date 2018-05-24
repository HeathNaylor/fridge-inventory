<?php

namespace FridgeInventory\Src\Entities\TemperatureRegulators;

use FridgeInventory\Src\Entities\Item;
use FridgeInventory\Src\Entities\ItemInterface;

interface TemperatureRegulatorInterface extends \JsonSerializable
{
    /**
     * TemperatureRegulatorInterface constructor.
     * @param ItemInterface ...$items
     */
    public function __construct(ItemInterface ...$items);

    /**
     * @param ItemInterface $item
     * @throws \Exception
     */
    public function addItem(ItemInterface $item);

    /**
     * @return Item[]
     */
    public function inventory() : array;

    /**
     * @param int $temperature
     */
    public function setTemperature(int $temperature);
}