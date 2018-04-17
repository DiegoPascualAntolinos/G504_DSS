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

Route::name('mainPage')->get('/main', function () {
    return view('mainPage');
 });

Route::get('/register', function(){
    return view('register');
});

Route::name('create_client')->get('/usuarios', 'clientController@create');

Route::name('store_client')->post('/usuarios', 'clientController@store');

Route::name('index_client')->get('/usuarios', 'clientController@index');

Route::name('edit_client')->get('/usuarios/{cliente}/edit', 'clientController@edit');

Route::name('update_client')->put('/usuarios/{cliente}', 'clientController@update');

Route::name('delete_client')->delete('/usuarios/{client}', 'clientController@delete');


Route::get('/login', function(){
    return view('login');
});

Route::get('/vuelos', function(){
    return view('vuelos');
});

Route::name('create_flight')->get('/vuelos', 'flightController@create');

Route::name('store_flight')->post('/vuelos', 'flightController@store');

Route::name('index_flight')->get('/vuelos', 'flightController@index');

Route::name('edit_flight')->get('/vuelos/{vuelo}/edit', 'flightController@edit');

Route::name('update_flight')->put('/vuelos/{vuelo}', 'flightController@update');

Route::name('delete_flight')->delete('/vuelos/{flight}', 'flightController@delete');

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/profile/ajustesUsuario', function(){
    return view('ajustesUsuario');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::name('create_offer')->get('/oferta', 'offerController@create');

Route::name('store_offer')->post('/oferta', 'offerController@store');

Route::name('index_offer')->get('/oferta', 'offerController@index');

Route::name('edit_offer')->get('/oferta/{oferta}/edit', 'offerController@edit');

Route::name('update_offer')->put('/oferta/{oferta}', 'offerController@update');

Route::name('delete_offer')->delete('/oferta/{offer}', 'offerController@delete');






Route::delete('/oferta/{id}', function($id){

    Offer::findOrFail($id)->delete();
    return redirect('/oferta');
});



Route::get('/contacto', function(){
    return view('contacto');
});

Route::get('/ciudades', function(){
    return view('ciudades');
});

Route::name('create_city')->get('/ciudades', 'cityController@create');

Route::name('store_city')->post('/ciudades', 'cityController@store');

Route::get('/ciudades', 'cityController@index');



Route::get('/reservas', function(){
    return view('reservas');
});

Route::name('create_reservation')->get('/reservas', 'reservationController@create');

Route::name('store_reservation')->post('/reservas', 'reservationController@store');

Route::get('/reservas', 'reservationController@index');

//Route::get('/usuarios', function(){
//    return view('usuarios');
//});