<?php

namespace App\Http\Controllers;

use App\Offer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class offerController extends Controller
{

    public function index(Request $request){

        $offers = Offer::search($request->get('q'))->orderBy('id', 'desc')->paginate(5);
        return view('oferta')->with(['offers' => $offers]);
       
    }

    public function indexAdmin(Request $request){

        $offers = Offer::search($request->get('q'))->orderBy('id', 'desc')->paginate(5);
        return view('Admin/ofertaAdmin')->with(['offers' => $offers]);
       
    }

    public function indexProfile(Request $request, $id){
        $ofertas = DB::table('reservations')->where('user_id', $id)->get();
        
        return view('/profile')->with(['offers' => $ofertas]);
        
    }


    public function create(){
        return view('oferta');
    }

    public function createAdmin(){
        return view('Admin/ofertaAdmin');
    }

   

    public function store(Request $request){

        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $cliente = DB::table('users')->where('email', '=', $request->get('email'))->first();
        $oferta = new Offer;
        $oferta->nombre = $request->get('titulo');
        $oferta->fechaViaje = $request->get('fechaViaje');
        $oferta->fechaFinOferta = $request->get('fechaFinOferta');
        $oferta->origen = $request->get('origen');
        $oferta->destino = $request->get('destino');
        $oferta->precio = $request->get('precio');
        $oferta->descripcion = $request->get('descripcion');
        $oferta->save();

        $oferta->User()->attach($cliente->id);

        $offers = Offer::orderBy('id', 'desc')->paginate(5);

        return view('oferta')->with(['offers' => $offers]);
      

    }

    public function storeProfile(Request $request){

        

        $cliente = DB::table('users')->where('email', '=', Auth::user()->email)->first();
        $oferta = new Offer;
        $oferta->nombre = $request->get('nombre');
        $oferta->fechaViaje = $request->get('fechaViaje');
        $oferta->fechaFinOferta = $request->get('fechaFinOferta');
        $oferta->origen = $request->get('origen');
        $oferta->destino = $request->get('destino');
        $oferta->precio = $request->get('precio');
        $oferta->descripcion = $request->get('descripcion');
        $oferta->save();

        return redirect()->route('index_profile', Auth::user()->id);

    }

    public function storeAdmin(Request $request){

        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $cliente = DB::table('users')->where('email', '=', $request->get('email'))->first();
        $oferta = new Offer;
        $oferta->nombre = $request->get('titulo');
        $oferta->fechaViaje = $request->get('fechaViaje');
        $oferta->fechaFinOferta = $request->get('fechaFinOferta');
        $oferta->origen = $request->get('origen');
        $oferta->destino = $request->get('destino');
        $oferta->precio = $request->get('precio');
        $oferta->descripcion = $request->get('descripcion');
        $oferta->save();

        $oferta->User()->attach($cliente->id);

        $offers = Offer::orderBy('id', 'desc')->paginate(5);

        return view('Admin/ofertaAdmin')->with(['offers' => $offers]);
      

    }

    public function edit(Offer $oferta){

        return view('editarOferta')->with(['oferta' => $oferta]);
    }


    public function editAdmin(Offer $oferta){

        return view('Admin/editarOfertaAdmin')->with(['oferta' => $oferta]);
    }


    public function update(Offer $oferta, Request $request){

        if($request->input('precio') != NULL){
            $oferta->precio = $request->input('precio');
        }

        if($request->input('nombre') != NULL){
            $oferta->nombre = $request->input('nombre');
        }

        if($request->input('fechaViaje') != NULL){
            $oferta->fechaViaje = $request->input('fechaViaje');
        }

        if($request->input('origen') != NULL){
            $oferta->origen = $request->input('origen');
        }

        if($request->input('destino') != NULL){
            $oferta->destino = $request->input('destino');
        }

        if($request->input('descripcion') != NULL){
            $oferta->descripcion = $request->input('descripcion');
        }

        $oferta->save();

        return redirect()->route('index_offer');


    }

    public function updateAdmin(Offer $oferta, Request $request){

        if($request->input('precio') != NULL){
            $oferta->precio = $request->input('precio');
        }

        if($request->input('nombre') != NULL){
            $oferta->nombre = $request->input('nombre');
        }

        if($request->input('fechaViaje') != NULL){
            $oferta->fechaViaje = $request->input('fechaViaje');
        }

        if($request->input('origen') != NULL){
            $oferta->origen = $request->input('origen');
        }

        if($request->input('destino') != NULL){
            $oferta->destino = $request->input('destino');
        }

        if($request->input('descripcion') != NULL){
            $oferta->descripcion = $request->input('descripcion');
        }
        
        $oferta->save();

        return redirect()->route('index_offerAdmin');


    }


    public function delete(Offer $offer){

        $offer->delete();
        return redirect()->route('index_offerAdmin');
    }

    public function deleteAdmin(Offer $offer){

        $offer->delete();
        return redirect()->route('index_offerAdmin');
    }


    public function search(Request $request){



    }

}
