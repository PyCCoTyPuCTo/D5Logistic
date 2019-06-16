<?php


namespace App\Action\ProductsOrders;

use App\ProductOrder;
use Illuminate\Http\Request;

class CreateProductsOrdersAction
{
    private $data;

    public function __construct(Request $productOrder)
    {
        $this->data = $productOrder;
    }

    public function create()
    {
        ProductOrder::create($this->data->all());
    }
}