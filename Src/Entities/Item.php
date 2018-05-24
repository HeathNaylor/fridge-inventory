<?php

namespace FridgeInventory\Src\Entities;

use FridgeInventory\Src\Entities\Barcodes\BarcodeInterface;

class Item implements ItemInterface
{
    const TYPE_MEAT = 'meat';
    const TYPE_DAIRY = 'dairy';
    const TYPE_PRODUCE = 'produce';

    const TYPES = [
        self::TYPE_MEAT,
        self::TYPE_DAIRY,
        self::TYPE_PRODUCE,
    ];

    /**
     * @var BarcodeInterface
     */
    private $barcode;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTimeImmutable
     */
    private $expirationDate;

    /**
     * @var string
     */
    private $type;

    public function __construct(BarcodeInterface $barcode, string $name, string $type, \DateTimeImmutable $expirationDate)
    {
        $this->barcode = $barcode;
        $this->name = $name;
        $this->type = $type;
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return BarcodeInterface
     */
    public function getBarcode() : BarcodeInterface
    {
        return $this->barcode;
    }

    public function setExpirationDate(\DateTimeImmutable $expiration)
    {
        $this->expirationDate = $expiration;
    }

    public function getExpirationDate() : \DateTimeImmutable
    {
        return $this->expirationDate;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
            'barcode' => $this->barcode,
            'name' => $this->name,
            'expirationDate' => $this->expirationDate->format('Y-m-d'),
            'type' => $this->type
        ];
    }
}