<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\User');
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

