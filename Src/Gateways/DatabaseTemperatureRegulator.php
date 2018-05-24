<?php

namespace FridgeInventory\Src\Gateways;

use FridgeInventory\Src\Entities\Barcodes\UpcABarcode;
use FridgeInventory\Src\Entities\Item;
use FridgeInventory\Src\Entities\TemperatureRegulators\Fridge;
use FridgeInventory\Src\Entities\TemperatureRegulators\TemperatureRegulatorInterface;

class DatabaseTemperatureRegulator implements GatewayInterface
{
    /**
     * @var \PDO
     */
    private $database;

    /**
     * Database constructor.
     * @param \PDO $database
     */
    public function __construct(\PDO $database)
    {
        $this->database = $database;
    }

    /**
     * @param TemperatureRegulatorInterface $temperatureRegulator
     */
    public function persist($temperatureRegulator)
    {
        // TODO: Implement persist() method.
    }

    /**
     * @param int $id
     * @return TemperatureRegulatorInterface
     * @throws \Exception
     */
    public function retrieve(int $id): TemperatureRegulatorInterface
    {
        $barcode = new UpcABarcode("123456789");
        $items[] = new Item($barcode, "Milk", Item::TYPE_DAIRY, new \DateTimeImmutable("+2 weeks"));
        $items[] = new Item($barcode, "Steak", Item::TYPE_MEAT, new \DateTimeImmutable("+1 weeks"));
        $items[] = new Item($barcode, "Banana", Item::TYPE_PRODUCE, new \DateTimeImmutable("+3 weeks"));
        return new Fridge(...$items);
    }
}