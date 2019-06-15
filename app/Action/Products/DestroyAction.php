<?php


namespace App\Action\Products;

use App\Product;

class DestroyAction
{
    /**
     * @var Product
     */
    private $product;

    public function __construct($id)
    {
        $this->product = Product::find($id)->get();
    }

    public function destroy()
    {
        $this->product->delete();
    }
}