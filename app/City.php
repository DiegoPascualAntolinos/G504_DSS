<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['pais', 'provincia', 'ciudad'];

    public function Offer(){
        return $this->belongsToMany('App\Offer');
    }

    public function flights(){
        return $this->hasMany('App\Flight');
    }

    public function hotels(){
        return $this->hasMany('App\Hotel');
    }

    public function scopeSearch($query, $nombre){
        if(trim($nombre) != ""){
        return $query->where('pais', 'like', '%' .$nombre. '%')
                ->orWhere('provincia', 'like', '%' .$nombre. '%')
                ->orWhere('ciudad', 'like', '%' .$nombre. '%');
        }
    }
}
