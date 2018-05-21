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

    public function updateProfileSettings(User $user, Request $request){
        
        if($request->get('dni') != NULL){
            $user->dni = $request->get('dni');
        }
        else{
            $user->dni = Auth::user()->dni;
        }

        if($request->get('nombre') != NULL){
            $user->nombre = $request->get('nombre');
        }
        else{
            $user->nombre = Auth::user()->nombre;
        }

        if($request->get('direccion') != NULL){
            $user->direccion = $request->get('direccion');
        }
        else{
            $user->direccion = Auth::user()->direccion;
        }

        if($request->get('email') != NULL){
            $user->email = $request->get('email');
        }
        else{
            $user->email = Auth::user()->email;
        }

        if($request->get('telefono') != NULL){
            $user->telefono = $request->get('telefono');
        }
        else{
            $user->telefono = Auth::user()->telefono;
        }

        if($request->get('password') != NULL){
            $user->password = $request->get('password');
        }
        else{
            $user->password = Auth::user()->password;
        }

        $user->save();

        return redirect()->route('/profileSettings/{id}');
        
    }

    private static function setNullWhenEmpty($model)
    {
        foreach ($model->toArray() as $name => $value) {
            if (empty($value)) {
            $model->{$name} = null;
            }
        }
    }

}
