<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function offer(){
        return $this->belongsToMany('App\Offer');
    }

    public function reservations(){
        return $this->hasMany('App\Reservation');
    }

    public function scopeSearch($query, $nombre){
        if(trim($nombre) != ""){
            return $query->where('clients', 'like', '%' .$nombre. '%');
        }
    }
}
