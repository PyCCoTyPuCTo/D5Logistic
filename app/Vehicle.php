<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Vehicle extends Model
{
    protected $table = 'vehicle';

    protected $fillable = [
        'storage_id', 'tonnage'
    ];

}
