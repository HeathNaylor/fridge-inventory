<?php

namespace FridgeInventory\Src\Gateways;

use FridgeInventory\Src\Entities\Barcodes\UpcABarcode;
use FridgeInventory\Src\Entities\Item;
use FridgeInventory\Src\Entities\ItemInterface;

class Database implements GatewayInterface
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
     * @param ItemInterface $recipe
     */
    public function persist($recipe)
    {
        // TODO: Implement persist() method.
    }

    /**
     * @param int $id
     * @return ItemInterface
     * @throws \Exception
     */
    public function retrieve(int $id): ItemInterface
    {
        $barcode = new UpcABarcode("123456789");
        $item = new Item($barcode, "Milk", Item::TYPE_DAIRY, new \DateTimeImmutable("+2 weeks"));
        return $item;
    }
}