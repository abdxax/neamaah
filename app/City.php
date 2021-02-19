<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //

    public function profile(){
        return $this->hasMany('App\City','city_id');
    }

    public function  orders(){
        return $this->hasMany('App\Order','city_id');
    }
}
