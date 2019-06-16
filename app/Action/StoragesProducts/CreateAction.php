<?php


namespace App\Action\StoragesProducts;


use Illuminate\Http\Request;
use App\StorageProduct;

class CreateAction
{
    private $data;

    public function __construct(Request $storageProduct)
    {
        $this->data = $storageProduct;
    }

    public function create()
    {
        StorageProduct::create($this->data->all());
    }
}