<?php


namespace App\Action\Products;

use Illuminate\Http\Request;
use App\Product;

class CreateAction
{
    private $data;
    private $user;

    public function __construct(Request $newData, $user_id)
    {
        $this->data = $newData;
        $this->user = $user_id;
    }

    public function create()
    {
        $newProduct = Product::create($this->data->all());
        $allStorages = new \App\Action\Storages\GetAllAction($this->user);
        $storages = $allStorages->get();
        foreach ($storages as $storage)
        {
            $newStorageProduct = new Request();
            $newStorageProduct['storage_id'] = $storage->id;
            $newStorageProduct['product_id'] = $newProduct->id;
            $newStorageProduct['count'] = 0;
            $createStorageProduct = new \App\Action\StoragesProducts\CreateAction($newStorageProduct);
            $createStorageProduct->create();
        }
    }
}