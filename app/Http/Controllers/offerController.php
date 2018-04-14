<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class offerController extends Controller
{


    public function create(){
        return view('destino');
    }

    public function store(Request $request){

        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $cliente = DB::table('clients')->where('email', '=', $request->get('email'))->first();
        $oferta = new Offer;
        $oferta->nombre = $request->get('titulo');
        $oferta->fechaViaje = $request->get('fechaViaje');
        $oferta->fechaFinOferta = $request->get('fechaFinOferta');
        $oferta->origen = $request->get('origen');
        $oferta->destino = $request->get('destino');
        $oferta->precio = $request->get('precio');
        $oferta->save();

        $oferta->Client()->attach($cliente->id);

        return view('mainPage');

    }
}
