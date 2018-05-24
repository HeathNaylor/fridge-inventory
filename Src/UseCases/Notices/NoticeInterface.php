<?php

namespace FridgeInventory\Src\UseCases;

interface NoticeInterface
{
    public function findNotices(array $items) : array;
}