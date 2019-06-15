<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StorageProduct extends Model
{
    protected $table='storages_products';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'storage_id', 'product_id', 'count'
    ];
}
