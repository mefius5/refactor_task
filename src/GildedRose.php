<?php

namespace App;

use App\Services\Items\ItemService;

final class GildedRose
{
    public $item;
    
    public function updateProperties($item)
    {
        $itemType = (new ItemService($item))->getItemType();
        $itemType->updateProperties();
    }

}