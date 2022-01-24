<?php

namespace App\Services\Items;

use App\Item;

class ItemService
{
    protected $item;

    public function __construct(Item $item) {
        $this->item = $item;
    }

    public function getItemType()
    {
        switch($this->item->name){
            case Item::TYPE_AGED_BRIE:
                return new AgedBrie($this->item);
            case Item::TYPE_BACKSTAGE_PASSES:
                return new BackstagePasses($this->item);
            case Item::TYPE_SULFURAS:
                return new Sulfuras($this->item);
            default:
                return new DefaultItem($this->item);
        }
    }
}