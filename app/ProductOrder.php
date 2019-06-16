<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $table='products_orders';

    protected $fillable = [
        'order_id', 'product_id', 'count'
    ];
}
