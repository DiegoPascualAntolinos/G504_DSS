<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $timestamps = false;

    public function cities(){
        return $this->belongsTo('App\City');
    }


    public function scopeSearch($query, $nombre){
        if(trim($nombre) != ""){
            return $query->where('nombre', 'like', '%' .$nombre. '%')
            ->orWhere('direccion', 'like', '%' .$nombre. '%')
            ->orWhere('telefono', 'like', '%' .$nombre. '%')
            ->orWhere('plazasDisponibles', 'like', '%' .$nombre. '%');
        }
    }
}
