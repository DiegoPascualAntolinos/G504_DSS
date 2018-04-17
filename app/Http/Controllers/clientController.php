<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class clientController extends Controller
{
    
    public function index(){
        $clients = Client::orderBy('id', 'desc')->paginate(5);

        return view('clientes')->with(['clients' => $clients]);
    }

    public function create(){
        return view('clientes');

    }

    public function store(Request $request){

        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|email',
            'dni' => 'required',
            'contraseña' => 'required'
        ]);

        $cliente = new Client;
        $cliente->dni = $request->get('dni');
        $cliente->nombre = $request->get('nombre');
        $cliente->direccion = $request->get('direccion');
        $cliente->email = $request->get('email');
        $cliente->telefono = $request->get('telefono');
        $cliente->contraseña = $request->get('contraseña');
        $cliente->save();

        $clients = Client::orderBy('id', 'desc')->paginate(5);

        return view('clientes')->with(['clients' => $clients]);


    }
}
