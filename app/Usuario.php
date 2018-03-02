<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'DNI';
    public $timestamps = false;

    public function oferta(){
        return $this->belongsToMany('App\Oferta');
    }
}
