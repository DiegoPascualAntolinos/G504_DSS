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

    public function scopeSearch($query, $nombre){
        if(trim($nombre) != ""){
            return $query->where('fechaLlegada', 'like', '%' .$nombre. '%')
                ->orWhere('fechaSalida', 'like', '%' .$nombre. '%')
                ->orWhere('cantidad', 'like', '%' .$nombre. '%');
        }
    }
    
}

