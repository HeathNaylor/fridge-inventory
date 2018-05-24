<?php


namespace FridgeInventory\Src\Entities\Barcodes;


interface BarcodeInterface extends \JsonSerializable
{
    public function __construct(string $barcode);

    public function getNumber() : string;
}