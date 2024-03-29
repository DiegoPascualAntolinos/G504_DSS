<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\User;
use App\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class reservationController extends Controller
{

    public function index(){

        $reservations = Reservation::orderBy('id', 'desc')->paginate(5);

        return view('reservas')->with(['reservations' => $reservations]);
    }


    public function create(){
        return view('reservas');
    }

    public function store(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'id_flight' => 'required',
            'fechaLlegada' => 'required',
            'fechaSalida' => 'required',
            'cantidad' => 'required'
        ]);

        $cliente = DB::table('users')->where('email', '=', $request->get('email'))->first();
        $vuelo = DB::table('flights')->where('id_flight', '=', $request->get('id_flight'))->first();
        $reserva = new Reservation;
        $reserva->fechaLlegada = $request->get('fechaLlegada');
        $reserva->fechaSalida = $request->get('fechaSalida');
        $reserva->cantidad = $request->get('cantidad');
        $reserva->save();

       // $reserva->User()->associate($cliente->id);
        $reserva->flight()->associate($vuelo);

        $reservations = Reservation::orderBy('id', 'desc')->paginate(5);
        $clients = User::orderBy('id', 'desc')->get();

        return view('reservas')->with(['reservations' => $reservations]);

    }

    public function search(Request $request){

        

    }

}
