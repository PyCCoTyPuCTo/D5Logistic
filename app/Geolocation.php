<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geolocation extends Model
{
    protected $table = 'geolocation';

    protected $fillable = [
        'longitude', 'latitude'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
