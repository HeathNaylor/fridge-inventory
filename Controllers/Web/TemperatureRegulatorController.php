<?php

namespace FridgeInventory\Controllers\Web;

use FridgeInventory\Src\Gateways\DatabaseTemperatureRegulator;

class TemperatureRegulatorController
{
    /**
     * @var \PDO
     */
    private $database;

    /**
     * TemperatureRegulatorController constructor.
     * @param \PDO $database
     */
    public function __construct(\PDO $database)
    {
        $this->database = $database;
    }

    /**
     * @throws \Exception
     */
    public function getExpiringItems()
    {
        $gateway = new DatabaseTemperatureRegulator($this->database);
        $fridge = $gateway->retrieve(1);

        require BASEPATH . "/Views/TemperatureRegulator.php";
    }
}