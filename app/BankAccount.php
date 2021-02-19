<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    //

    public function profile(){
        return $this->belongsTo('App\Profile','profile_id');
    }
}
