<?php

namespace App\Services\Items;

use App\AbstractClasses\AbstractItem;
use App\Item;

class Sulfuras extends AbstractItem
{
    public function updateSellin(): void
    {
        $this->item->sell_in = $this->item->sell_in;
    }

    public function updateQualityAfterSellin(): void
    {
        
    }

    public function updateQualityBeforeSellin(): void
    {
        
    }

    public function setFinalQuality(): void
    {
        $this->item->quality = 80;
    }

}