<?php


namespace App\Action\Orders;

use Illuminate\Http\Request;
use App\Order;

class CreateOrdersAction
{
    private $data;

    public function __construct(Request $order)
    {
        $this->data = $order;
    }

    public function create()
    {
        Order::create($this->data->all());
    }
}