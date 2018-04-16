<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class reservationController extends Controller
{

    public function index(){

        $reservations = Reservation::orderBy('id', 'desc')->paginate(3);

        return view('reservas')->with(['reservations' => $reservations]);
    }


    public function create(){
        return view('reservas');
    }

    public function store(Request $request){

        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $cliente = DB::table('clients')->where('email', '=', $request->get('email'))->first();
        $reserva = new Reservation;
        $reserva->fechaLlegada = $request->get('fechaLlegada');
        $reserva->fechaSalida = $request->get('fechaSalida');
        $reserva->cantidad = $request->get('cantidad');
        $reserva->save();

        $reserva->Client()->attach($cliente->id);

        return view('reservas');

    }
}
