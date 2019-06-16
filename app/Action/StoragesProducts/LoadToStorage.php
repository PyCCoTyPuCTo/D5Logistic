<?php


namespace App\Action\StoragesProducts;

use App\StorageProduct;

class LoadToStorage
{
    private $storage;
    private $count;

    public function  __construct($storage_id, $product_id, $count)
    {
        $this->count = $count;
        $this->storage = StorageProduct::where('storage_id', $storage_id)->where('product_id', $product_id)->first();
    }

    public function load()
    {
        if ($this->count <= 0)
            return;
        $this->storage['count'] += $this->count;
        $this->storage->save();
    }
}