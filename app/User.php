<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni', 'nombre', 'direccion', 'email', 'telefono', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function offer(){
        return $this->belongsToMany('App\Offer');
    }

    public function reservations(){
        return $this->hasMany('App\Reservation');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function scopeSearch($query, $nombre){
        if(trim($nombre) != ""){
            return $query->where('users', 'like', '%' .$nombre. '%');
        }
    }
}
