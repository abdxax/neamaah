<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable=[
      'name','linkLoca','descr','pathLogo',
    ];

    public function bankAccounts(){
        return $this->hasMany('App\BankAccount','profile_id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function city(){
        return $this->belongsTo('App\City','city_id');
    }

    public function phone(){
        return $this->hasMany('App\Phone','profile_id');
    }
}
