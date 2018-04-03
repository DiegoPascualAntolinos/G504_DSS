<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public $timestamps = false;

    public function Client(){
        return $this->belongsToMany('App\Client');
    }

    public function City(){
        return $this->belongsToMany('App\City');
    }
}
