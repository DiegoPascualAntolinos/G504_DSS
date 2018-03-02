<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';
    protected $primaryKey = 'CIF';
    public $timestamps = false;


    public function oferta(){ 

        return $this->hasMany('App\Oferta');
    }
}
