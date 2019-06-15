<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shop';

    protected $fillable = [
        'name', 'user_id', 'geolocation_id'
    ];
}
