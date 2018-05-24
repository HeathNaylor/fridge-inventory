<?php

namespace FridgeInventory\Tests\Entities;

use FridgeInventory\Entities\Barcodes\UpcABarcode;
use FridgeInventory\Entities\Item;
use FridgeInventory\Tests\BaseTest;

class ItemTest extends BaseTest
{
    public function testCreationOfItem()
    {
        $barcode = new UpcABarcode("071990386412");
        $item = new Item($barcode);
        $this->assertInstanceOf(Item::class, $item);
    }
}