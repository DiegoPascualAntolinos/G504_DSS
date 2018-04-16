<?php

namespace App\Http\Controllers;

use App\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class flightController extends Controller
{

    public function index(){

        $offers = Offer::orderBy('id', 'desc')->paginate(5);

        return view('vuelos')->with(['flights' => $flight]);
    }


    public function create(){
        return view('vuelos');
    }

    public function store(Request $request){

        $flight = new Flight;
        $flight->precio = $request->get('precio');
        $flight->fechaVuelo = $request->get('fechaVuelo');
        $flight->plazasDisponibles = $request->get('plazasDisponibles');
        $flight->save();

        $flight->Client()->attach($cliente->id);

        $flight = Offer::orderBy('id', 'desc')->paginate(5);

        return view('vuelos')->with(['flights' => $flight]);

    }
}
