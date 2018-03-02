<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresas extends Model
{
    public function products(){
        return $this->hasMany('App\ofertas');
    }
}
