<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{

    public $timestamps = false;

    protected $fillable = ['precio', 'fechaVuelo', 'plazasDisponibles'];

    public function originCity(){
        return $this->belongsTo('App\City');
    }

    public function destinationCity(){
        return $this->belongsTo('App\City');
    }

    public function reservations(){
        return $this->hasMany('App\Reservation');
    }
}
