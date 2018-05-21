<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class commentController extends Controller
{

    public function index(){
        $comentarios = DB::table('comments')->orderBy('id', 'desc')->paginate(5);
        $usuarios = User::all();
        return view('comentarios')->with(['comentarios' => $comentarios, 'usuarios' => $usuarios]);
    }

    public function comentar(){
        $texto = Input::all();
        $messages = ['required' => 'El campo :attribute no puede quedarse vacio.',];
        $validator = Validator::make($texto, [
            'comentario' => 'required',
            ],$messages);
             if ($validator->fails()) {
                return redirect('/comentarios')
                        ->withErrors($validator);
            }

        $comment = new Comment();
        $user = User::find(Auth::user()['id']);
        $comment->text = $texto['comentario'];
        $comment->user()->associate($user);
        $comment->save();
        return Redirect::to('/comentarios');
    }

    public function delete($id){

        DB::table('comments')->where('id','=',$id)->delete();

        return Redirect::to('/comentarios');
    }
}