<?php


namespace App\Action\StoragesProducts;

use App\StorageProduct;

class AddProduct
{
    private $product;
    private $storages;

    /**
     * AddProduct constructor.
     * @param $id
     * @param Array[storage_id, count] $storages
     */
    public function __construct($id, $storages)
    {
        $this->product = $id;
        $this->storages = $storages;
    }

    public function toStorages()
    {
        foreach ($this->storages as $storage)
        {
            $storage['product_id'] = $this->product;
            StorageProduct::create($storage);
        }
    }
}