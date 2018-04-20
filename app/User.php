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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeSearch($query, $nombre){
        if(trim($nombre) != ""){
            return $query->where('name', 'like', '%' .$nombre. '%')
                ->orWhere('email', 'like', '%' .$nombre. '%')
                ->orWhere('password', 'like', '%' .$nombre. '%')
                ->orWhere('dni', 'like', '%' .$nombre. '%')
                ->orWhere('direccion', 'like', '%' .$nombre. '%')
                ->orWhere('telefono', 'like', '%' .$nombre. '%');
        }

        
    }
}
