<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'oferta';
    public $timestamps = false;

    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }

    public function usuario(){
        return $this->belongsToMany('App\Usuario');
    }
}
