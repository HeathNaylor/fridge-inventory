<?php

namespace FridgeInventory\Tests\Entities\TemperatureRegulators;

use FridgeInventory\Entities\TemperatureRegulators\Fridge;
use FridgeInventory\Entities\TemperatureRegulators\TemperatureRegulatorInterface;
use FridgeInventory\Tests\BaseTest;

class FridgeTest extends BaseTest
{
    public function testSuccessfullyAbleToCreateFridge()
    {
        $fridge = new Fridge();
        $this->assertInstanceOf(TemperatureRegulatorInterface::class, $fridge);
    }
}