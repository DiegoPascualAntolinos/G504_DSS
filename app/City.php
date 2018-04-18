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
}
