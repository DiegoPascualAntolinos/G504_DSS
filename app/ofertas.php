<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ofertas extends Model
{
    public function empresas(){
        return $this->belongsTo('App\empresas');
    }

    public function usuarios(){
        return $this->belongsToMany('App\usuarios');
    }
}
