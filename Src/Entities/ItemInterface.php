<?php


namespace FridgeInventory\Src\Entities;


use FridgeInventory\Src\Entities\Barcodes\BarcodeInterface;

interface ItemInterface extends \JsonSerializable
{
    public function __construct(BarcodeInterface $barcode, string $name, string $type, \DateTimeImmutable $expirationDate);

    public function setExpirationDate(\DateTimeImmutable $expiration);

    public function getExpirationDate() : \DateTimeImmutable;

    public function getType() : string;

    public function getBarcode() : BarcodeInterface;

    public function getName() : string;
}