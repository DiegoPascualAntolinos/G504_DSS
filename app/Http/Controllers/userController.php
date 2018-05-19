<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;


class userController extends Controller
{
    
    public function index(Request $request){
        $users = User::search($request->get('q'))->orderBy('id', 'desc')->paginate(5);

        return view('usuarios')->with(['users' => $users]);
    }

    public function create(){
        return view('usuarios');

    }

    public function store(Request $request){

        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|email',
            'dni' => 'required',
            'password' => 'required'
        ]);

        $user = new User;
        $user->dni = $request->get('dni');
        $user->nombre = $request->get('nombre');
        $user->direccion = $request->get('direccion');
        $user->email = $request->get('email');
        $user->telefono = $request->get('telefono');
        $user->password = $request->get('password');
        $user->save();

        $users = User::orderBy('id', 'desc')->paginate(5);

        return view('usuarios')->with(['users' => $users]);


    }

    public function edit(User $user){

        return view('editarUsuarios')->with(['user' => $user]);
    }

    public function update(User $user, Request $request){

        $user->dni = $request->get('dni');
        $user->nombre = $request->get('nombre');
        $user->direccion = $request->get('direccion');
        $user->email = $request->get('email');
        $user->telefono = $request->get('telefono');
        $user->password = $request->get('password');
        $user->save();

        return redirect()->route('index_user');


    }


    public function delete(User $user){

        $user->delete();
        return view('eliminar');
    }

    public function search(Request $request){


        
    }

}
