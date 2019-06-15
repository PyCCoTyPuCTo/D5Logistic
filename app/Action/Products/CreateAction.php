<?php


namespace App\Action\Products;

use Illuminate\Http\Request;
use App\Product;

class CreateAction
{
    private $data;

    public function __construct(Request $newData)
    {
        $this->data = $newData;
    }

    public function create()
    {
        Product::create($this->data->all());
    }
}