<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $timestamps = false;

    public function client(){
        return $this->belongsTo('App\Client');
    }

    public function flight(){
        return $this->belongsTo('App\Flight');
    }
}
