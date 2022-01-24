<?php

namespace App\Services\Items;

use App\AbstractClasses\AbstractItem;
use App\Item;

class DefaultItem extends AbstractItem
{
    public function updateQualityAfterSellin(): void
    {
        $this->item->quality -= 2;
    }

    public function updateQualityBeforeSellin(): void
    {
        $this->item->quality -= 1;
    }
}