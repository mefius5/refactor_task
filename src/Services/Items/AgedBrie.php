<?php

namespace App\Services\Items;

use App\AbstractClasses\AbstractItem;

class AgedBrie extends AbstractItem
{
    public function updateQualityAfterSellin(): void
    {
        $this->item->quality += 2;
    }

    public function updateQualityBeforeSellin(): void
    {
        $this->item->quality += 1;
    }
}