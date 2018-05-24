<?php

define("BASEPATH", __DIR__);
require __DIR__ . '/vendor/autoload.php';

try{
    $database = new PDO('sqlite:/home/heath/git/fridge-inventory/users.db');
    $controller = new \FridgeInventory\Controllers\Api\TemperatureRegulatorController($database);
    $controller->getExpiringItems();
} catch (\Throwable $exception) {
    die($exception);
}
