<?php


namespace FridgeInventory\Src\Gateways;

interface GatewayInterface
{
    public function __construct(\PDO $database);

    public function persist($object);

    public function retrieve(int $id);
}