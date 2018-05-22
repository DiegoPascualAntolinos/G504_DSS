<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class hotelController extends Controller
{

    
    public function postNewImage(Request $request){
        $this->validate($request, ['photo' => 'requiered|image']);
    

        // $hotel = Auth::user();
         $extension = $request->file('photo')->getHotelOriginalExtension();
         $file_name = $hotel->id . '.' . $extension;

         Image::make($request->file('photo'))
            ->resize(144,144)
            ->save('img/hotels/' . $file_name);

        $hotel->photo = $extension;
        $hotel->save();

        return back()->with('notification', 'Se ha actualizado la foto');
    }

    public function getPhotoAttribute()
    {
        if($this->photo)
            return 'img/hotels'.$this->id.'.'.$this->photo;
        
        return 'img/hotels/hotel.png';
    }
    

    public function index(Request $request){

        $hotels = Hotel::search($request->get('q'))->orderBy('id', 'desc')->paginate(5);
        return view('hoteles')->with(['hotels' => $hotels]);
    }

    public function create(){
        return view('hoteles');
    }


    public function store(Request $request){
       
       // $city = DB::table('cities')->where('id_city', '=', $request->get('id_city'))->first();
        $hotele = new Hotel;
        $hotele->nombre = $request->get('nombre');
        $hotele->direccion = $request->get('direccion');
        $hotele->telefono = $request->get('telefono');
        $hotele->plazasDisponibles = $request->get('plazasDisponibles');
        $hotele->save();

       // $hotele->city()->associate($city);

        $hotels = Hotel::orderBy('id', 'desc')->paginate(5);

        return view('hoteles')->with(['hotels' => $hotels]);
        
    }


    public function indexAdmin(Request $request){

        $hotels = Hotel::search($request->get('q'))->orderBy('id', 'desc')->paginate(5);
        return view('Admin/hotelAdmin')->with(['hotels' => $hotels]);
    }

    public function createAdmin(){
        return view('Admin/hotelAdmin');
    }


    public function storeAdmin(Request $request){
       
       // $city = DB::table('cities')->where('id_city', '=', $request->get('id_city'))->first();
        $hotele = new Hotel;
        $hotele->nombre = $request->get('nombre');
        $hotele->direccion = $request->get('direccion');
        $hotele->telefono = $request->get('telefono');
        $hotele->plazasDisponibles = $request->get('plazasDisponibles');
        $hotele->save();

       // $hotele->city()->associate($city);

        $hotels = Hotel::orderBy('id', 'desc')->paginate(5);

        return view('Admin/hotelAdmin')->with(['hotels' => $hotels]);
        
    }

    public function editAdmin(Hotel $hotel){

        return view('Admin/editarHotelAdmin')->with(['hotel' => $hotel]);
    }

    public function updateAdmin(Hotel $hotel, Request $request){

        $hotel->nombre = $request->get('nombre');
        $hotel->direccion = $request->get('direccion');
        $hotel->telefono = $request->get('telefono');
        $hotel->plazasDisponibles = $request->get('plazasDisponibles');
        $hotel->save();

        return redirect()->route('index_hotelAdmin');

    }

    public function deleteAdmin(Hotel $hotel){

        $hotel->delete();
        return redirect()->route('index_hotelAdmin');
    }

    public function search(Request $request){


        
    }
    
}