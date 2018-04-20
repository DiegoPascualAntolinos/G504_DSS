<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{

    protected $table = 'offers';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function Client(){
        return $this->belongsToMany('App\Client');
    }

    public function City(){
        return $this->belongsToMany('App\City');
    }
    public function scopeSearch($query, $nombre){
        if(trim($nombre) != ""){
            return $query->where('nombre', 'like', '%' .$nombre. '%')
                    ->orWhere('fechaSalida', 'like', '%' .$nombre. '%')
                    ->orWhere('fechaLlegada', 'like', '%' .$nombre. '%')
                    ->orWhere('origen', 'like', '%' .$nombre. '%')
                    ->orWhere('destino', 'like', '%' .$nombre. '%')
                    ->orWhere('descripcion', 'like', '%' .$nombre. '%')
                    ->orWhere('precio', 'like', '%' .$nombre. '%');
        }
    }

}
