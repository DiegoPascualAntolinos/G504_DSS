<?php

namespace App\Http\Controllers;

use App\Flight;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class flightController extends Controller
{

    public function index(Request $request){

        $flight = Flight::search($request->get('q'))->orderBy('id', 'desc')->paginate(5);

        return view('vuelos')->with(['flights' => $flight]);
    }

    public function indexAdmin(Request $request){

        $flight = Flight::search($request->get('q'))->orderBy('id', 'desc')->paginate(5);

        return view('Admin/vueloAdmin')->with(['flights' => $flight]);
    }



    public function create(){
        return view('vuelos');
    }

    public function createAdmin(){
        return view('Admin/vueloAdmin');
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


    public function storeAdmin(Request $request){

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
        $origen->save();

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

        return view('Admin/vueloAdmin')->with(['flights' => $flights]);

    }




    public function edit(Flight $vuelo){

        return view('editarVuelo')->with(['vuelo' => $vuelo]);
    }

    public function update(Flight $vuelo, Request $request){

        if($request->input('precio') != NULL){
            $vuelo->precio = $request->input('precio');
        }

        if($request->input('fechaVuelo') != NULL){
            $vuelo->fechaVuelo = $request->input('fechaVuelo');
        }
        
        if($request->input('plazasDisponibles') != NULL){
            $vuelo->plazasDisponibles = $request->input('plazasDisponibles');
        }

        $vuelo->save();

        /*$vuelo->update(
            $request->only('precio', 'fechaVuelo', 'plazasDisponibles')
        );*/

        return redirect()->route('index_flight');


    }

    public function editAdmin(Flight $vuelo){

        return view('Admin/editarVueloAdmin')->with(['vuelo' => $vuelo]);
    }

    public function updateAdmin(Flight $vuelo, Request $request){

        if($request->input('precio') != NULL){
            $vuelo->precio = $request->input('precio');
        }

        if($request->input('fechaVuelo') != NULL){
            $vuelo->fechaVuelo = $request->input('fechaVuelo');
        }
        
        if($request->input('plazasDisponibles') != NULL){
            $vuelo->plazasDisponibles = $request->input('plazasDisponibles');
        }
        $vuelo->save();

        return redirect()->route('index_flightAdmin');


    }


    public function delete(Flight $flight){

        $flight->delete();
        return view('eliminar');
    }

    public function deleteAdmin(Flight $flight){

        $flight->delete();
        return redirect()->route('index_flightAdmin');
    }




    public function search(Request $request){


        
    }

   
}
