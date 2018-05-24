<?php


namespace FridgeInventory\Src\UseCases\RecipeGenerator;


use FridgeInventory\Src\Entities\TemperatureRegulators\TemperatureRegulatorAggregate;

interface RecipeGeneratorInterface
{
    public function generate(TemperatureRegulatorAggregate $aggregateItems) : array;
}