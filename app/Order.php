<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable=[
      'name','phone','city_id','link','desc','time_come','date_of_come'
    ];

    public function city(){
        return $this->belongsTo('App\City');
    }
}
