<?php


namespace App\Action\Products;

use Illuminate\Http\Request;
use App\Product;

class UpdateAction
{
    private $data;
    private $product;

    public function __construct(Request $newData, $id)
    {
        $this->data = $newData;
        $this->product = Product::find($id)->first();
    }

    public function update()
    {
        $this->product->update($this->data->all());
    }
}