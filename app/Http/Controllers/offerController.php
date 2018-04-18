<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class offerController extends Controller
{

    public function index(){

        $offers = Offer::orderBy('id', 'desc')->paginate(5);

        return view('oferta')->with(['offers' => $offers]);
    }


    public function create(){
        return view('oferta');
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
        $oferta->descripcion = $request->get('descripcion');
        $oferta->save();

        $oferta->Client()->attach($cliente->id);

        $offers = Offer::orderBy('id', 'desc')->paginate(5);

        return view('oferta')->with(['offers' => $offers]);

    }

    public function edit(Offer $oferta){

        return view('editarOferta')->with(['oferta' => $oferta]);
    }

    public function update(Offer $oferta, Request $request){

        $oferta->precio = $request->get('precio');
        $oferta->nombre = $request->get('nombre');
        $oferta->fechaViaje = $request->get('fechaViaje');
        $oferta->origen = $request->get('origen');
        $oferta->destino = $request->get('destino');
        $oferta->descripcion = $request->get('descripcion');
        $oferta->save();

        return redirect()->route('index_offer');


    }

    public function delete(Offer $offer){

        $offer->delete();
        return view('eliminar');
    }
}
