<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('faltaPorHacer');
});

Route::get('/hello', 'holaMundo@mostrarContenido');

Route::get('/home', function(){
    return view('home', array('nombre' => 'Dieguchi'));
});
/*
/hello es el nombre de la entrada para acceder al controlador
holaMundo nombre del controlador
mostrarContenido nombre de la funcion a ser llamados
*/

Route::get('/main', function () {
    return view('mainPage');
 });

Route::get('/register', function(){
    return view('register');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/faltaPorHacer', function(){
    return view('faltaPorHacer');
});
Route::get('/profile', function(){
    return view('profile');
});