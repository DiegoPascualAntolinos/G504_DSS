<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    public function ofertas(){
        return $this->belongsToMany('App\ofertas');
    }
}
