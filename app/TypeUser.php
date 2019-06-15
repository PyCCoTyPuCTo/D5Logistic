<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    protected $table = 'type_user';

    public function user(){
        return $this->hasMany('App\User');
    }
}
