<?php


namespace App\Action\StoragesProducts;
use App\StorageProduct;

class MoveAction
{
    private $product;
    /** @var StorageProduct */
    private $fromStorage;
    /** @var StorageProduct */
    private $toStorage;
    private $count;

    public function __construct($product_id, $fromStorage_id, $toStorage_id, $count)
    {
        $this->product = $product_id;
        $this->fromStorage = StorageProduct::where('storage_id', $fromStorage_id)->first();
        $this->toStorage = StorageProduct::where('storage_id', $toStorage_id)->first();
        $this->count = $count;
    }

    public function move()
    {
        if ($this->fromStorage['count'] < $this->count)
            return;
        $this->fromStorage['count'] -= $this->count;
        $this->toStorage['count'] += $this->count;
        $this->fromStorage->save();
        $this->toStorage->save();
    }
}