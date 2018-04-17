<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class cityController extends Controller
{

    public function index(){

        $cities = City::orderBy('id', 'desc')->paginate(5);

        return view('ciudades')->with(['cities' => $cities]);
    }


    public function create(){
        return view('ciudades');
    }

    public function store(Request $request){


        $ciudad = new City;
        $ciudad->pais = $request->get('pais');
        $ciudad->provincia = $request->get('provincia');
        $ciudad->ciudad = $request->get('ciudad');
        $ciudad->save();

       

      

        return view('ciudades')->with(['cities' => $ciudad]);

    }
}
