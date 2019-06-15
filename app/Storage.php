<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $table='storage';

    protected $fillable = [
        'user_id', 'geolocation_id'
    ];

    public function seller(){
        return $this->belongsTo('App\User');
    }
}
