<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        return redirect()->route('index_user');
    }

    public function updateProfileSettings(Request $request){
        
        $user = Auth::user();

        if($request->input('dni') != NULL){
            $user->dni = $request->input('dni');
        }

        if($request->input('nombre') != NULL){
            $user->nombre = $request->input('nombre');
        }
       
        if($request->input('direccion') != NULL){
            $user->direccion = $request->input('direccion');
        }
        
        if($request->input('email') != NULL){
            $user->email = $request->input('email');
        }

        if($request->input('telefono') != NULL){
            $user->telefono = $request->input('telefono');
        }

        if($request->input('password') != NULL){
            $user->password = $request->input('password');
        }

        if($request->has('avatar')){
            /*$image      = $request->file('avatar');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();                 
            });

            $img->stream(); // <-- Key point

            //dd();
            Storage::disk('local')->put('images/1/smalls'.'/'.$fileName, $img, 'public');
            */
        }
        

        $user->save();

        

        return redirect()->route('index_profile', Auth::user()->id);
        
    }


    public function indexCommentsProfile(Request $id){
        $comentarios = DB::table('comments')->where('user_id', Auth::user()->id)->get();
        return view('/profileComments')->with(['comments' => $comentarios]);
    }

}
