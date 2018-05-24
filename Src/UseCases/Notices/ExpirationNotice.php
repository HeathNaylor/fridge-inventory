<?php

namespace FridgeInventory\Src\UseCases;

use FridgeInventory\Src\Entities\ItemInterface;

class ExpirationNotice implements NoticeInterface
{
    /**
     * @param ItemInterface[] $items
     * @return ItemInterface[]
     */
    public function findNotices(array $items): array
    {
        return array_filter($items, function(ItemInterface $item) {
            $diff = $item->getExpirationDate()->diff(new \DateTimeImmutable());
            return ($diff->days < 7) ? $item : false;
        });
    }
}