<?php


namespace App\Action\ProductsOrders;

use App\ProductOrder;

class DestroyProductsOrdersAction
{
    /** @var ProductOrder */
    private $productOrder;

    public function __construct($order_id, $product_id)
    {
        $this->productOrder = ProductOrder::where('order_id', $order_id)->where('product_id', $product_id)->first();
    }

    public function destroy()
    {
        $this->productOrder->delete();
    }
}