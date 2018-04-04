<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class holaMundo extends Controller
{
    public function mostrarContenido(){
        $data = "Hola Mundo!!";
        return $data;
    }
}
