<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;

    public function clients(){
        return $this->belongsTo('App\Client');
    }
}
