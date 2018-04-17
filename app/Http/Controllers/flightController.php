<?php

namespace App\Http\Controllers;

use App\Flight;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class flightController extends Controller
{

    public function index(){

        $flight = Flight::orderBy('id', 'desc')->paginate(5);

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
        
        $origen1 = new City;
        $origen1->pais = $request->get('pais');
        $origen1->provincia = $request->get('provincia');
        $origen1->ciudad = $request->get('ciudad');
        
        $origen = City::firstOrCreate([
            'ciudad' => $origen1->ciudad,
        ], [
            'provincia' => $origen1->provincia,
            'pais' => $origen1->pais,
        ]);
        //$origen->save();

        $destino1 = new City;
        $destino1->pais = $request->get('pais');
        $destino1->provincia = $request->get('provincia');
        $destino1->ciudad = $request->get('ciudad');
        
        $destino = City::firstOrCreate([
            'ciudad' => $destino1->ciudad,
        ], [
            'provincia' => $destino1->provincia,
            'pais' => $destino1->pais,
        ]);

        $flight->originCity()->associate($origen->id);
        $flight->destinationCity()->associate($destino->id);

        $flights = Flight::orderBy('id', 'desc')->paginate(5);

        return view('vuelos')->with(['flights' => $flights]);

    }
}
