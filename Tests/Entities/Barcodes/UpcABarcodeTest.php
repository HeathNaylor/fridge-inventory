<?php

namespace FridgeInventory\Tests\Entities;

use FridgeInventory\Entities\Barcodes\UpcABarcode;
use FridgeInventory\Tests\BaseTest;

class UpcABarcodeTest extends BaseTest
{
    public function testUpcABarcodeCreationIsSuccessful()
    {
        $barcode = new UpcABarcode("071990386412");
        $this->assertInstanceOf(UpcABarcode::class, $barcode);
    }

    public function testGetUpcABarcodeNumber()
    {
        $barcode = new UpcABarcode("071990386412");
        $this->assertEquals("071990386412", $barcode->getNumber());
    }
}