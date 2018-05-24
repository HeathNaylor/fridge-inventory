<?php

/** @var \FridgeInventory\Entities\TemperatureRegulators\TemperatureRegulatorInterface $fridge */

foreach($fridge->inventory() as $item) {
    echo $item->getName() . "<br/>";
}