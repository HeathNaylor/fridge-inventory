<?php

namespace FridgeInventory\Src\Entities\TemperatureRegulators;

use FridgeInventory\Src\Entities\Item;
use FridgeInventory\Src\Entities\ItemInterface;

class Freezer implements TemperatureRegulatorInterface
{
    /**
     * @var ItemInterface[]
     */
    private $items = [];

    /**
     * @var int
     */
    private $temperature = 0;

    /**
     * TemperatureRegulatorInterface constructor.
     * @param ItemInterface ...$items
     */
    public function __construct(ItemInterface ...$items)
    {
        $this->items = $items;
    }

    /**
     * @param ItemInterface $item
     * @throws \Exception
     */
    public function addItem(ItemInterface $item)
    {
        switch($item->getType()) {
            case Item::TYPE_MEAT:
                $item->setExpirationDate($item->getExpirationDate()->modify("+2 months"));
                break;
            case Item::TYPE_PRODUCE:
                $item->setExpirationDate($item->getExpirationDate()->modify("+9 months"));
                break;
            case Item::TYPE_DAIRY:
                $item->setExpirationDate($item->getExpirationDate()->modify("+6 months"));
                break;
            default:
                throw new \Exception("Item type not supported");
        }

        $this->items[] = $item;
    }

    /**
     * @return array | Item[]
     */
    public function inventory(): array
    {
        return $this->items;
    }

    /**
     * @param int $temperature
     */
    public function setTemperature(int $temperature)
    {
        $this->temperature = $temperature;
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
        // TODO: Implement jsonSerialize() method.
    }
}