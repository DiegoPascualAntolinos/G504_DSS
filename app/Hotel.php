<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $timestamps = false;

    public function cities(){
        return $this->belongsTo('App\City');
    }
}
