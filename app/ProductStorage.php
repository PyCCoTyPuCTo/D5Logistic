<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStorage extends Model
{
    protected $table = 'storages_products';

    protected $fillable = [
        'storage_id',
        'product_id'
    ];
}
