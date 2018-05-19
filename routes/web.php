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

// -------------------------- ADMIN -------------------------------


Route::get('/admin', function(){
    return view('Admin/admin');
});

// ofertaAdmin

Route::get('/ofertaAdmin', function(){
    return view('Admin/ofertaAdmin');
});

Route::name('create_offerAdmin')->get('/ofertaAdmin', 'offerController@createAdmin');

Route::name('store_offerAdmin')->post('/ofertaAdmin', 'offerController@storeAdmin');

Route::name('index_offerAdmin')->get('/ofertaAdmin', 'offerController@indexAdmin');

Route::name('edit_offerAdmin')->get('/ofertaAdmin/{oferta}/edit', 'offerController@editAdmin');

Route::name('update_offerAdmin')->put('/ofertaAdmin/{oferta}', 'offerController@updateAdmin');

Route::name('delete_offer')->delete('/ofertaAdmin/{offer}', 'offerController@deleteAdmin');

// vueloAdmin

Route::name('create_flightAdmin')->get('/vueloAdmin', 'flightController@createAdmin');

Route::name('store_flightAdmin')->post('/vueloAdmin', 'flightController@storeAdmin');

Route::name('index_flightAdmin')->get('/vueloAdmin', 'flightController@indexAdmin');

Route::name('edit_flightAdmin')->get('/vueloAdmin/{vuelo}/edit', 'flightController@editAdmin');

Route::name('update_flightAdmin')->put('/vueloAdmin/{vuelo}', 'flightController@updateAdmin');

Route::name('delete_flight')->delete('/vueloAdmin/{flight}', 'flightController@deleteAdmin');


Route::get('/vueloAdmin', function(){
    return view('Admin/vueloAdmin');
});


// hotelAdmin


Route::get('/hotelAdmin', function(){
    return view('Admin/hotelAdmin');
});

Route::name('create_hotelAdmin')->get('/hotelAdmin', 'hotelController@createAdmin');

Route::name('store_hotelAdmin')->post('/hotelAdmin', 'hotelController@storeAdmin');

Route::name('index_hotelAdmin')->get('/hotelAdmin', 'hotelController@indexAdmin');

Route::name('edit_hotelAdmin')->get('/hotelAdmin/{hotel}/edit', 'hotelController@editAdmin');

Route::name('update_hotelAdmin')->put('/hotelAdmin/{hotel}', 'hotelController@updateAdmin');

Route::name('delete_hotelAdmin')->delete('/hotelAdmin/{hotel}', 'hotelController@deleteAdmin');







// -------------------------- FIN ADMIN -------------------------


Route::get('/hello', 'holaMundo@mostrarContenido');

Route::get('/home', function(){
    return view('home', array('nombre' => 'Dieguchi'));
});
/*
/hello es el nombre de la entrada para acceder al controlador
holaMundo nombre del controlador
mostrarContenido nombre de la funcion a ser llamados
*/

Route::get('/', function(){
    return view('mainPage');
});


Route::name('mainPage')->get('/main', function () {
    return view('mainPage');
 });

Route::get('/register', function(){
    return view('register');
});


// ------------------------------ USUARIOS ------------------------------------

Route::get('/usuarios', function(){
    return view('usuarios');
 });
 
Route::name('create_user')->get('/usuarios', 'userController@create');

Route::name('store_user')->post('/usuarios', 'userController@store');

Route::name('index_user')->get('/usuarios', 'userController@index');

Route::name('edit_user')->get('/usuarios/{usuario}/edit', 'userController@edit');

Route::name('update_user')->put('/usuarios/{usuario}', 'userController@update');

Route::name('delete_user')->delete('/usuarios/{user}', 'userController@delete');



Route::get('/login', function(){
    return view('login');
});

// ---------------------------------- Vuelos -----------------------------------


Route::get('/vuelos', function(){
    return view('vuelos');
});

Route::name('create_flight')->get('/vuelos', 'flightController@create');

Route::name('store_flight')->post('/vuelos', 'flightController@store');

Route::name('index_flight')->get('/vuelos', 'flightController@index');

Route::name('edit_flight')->get('/vuelos/{vuelo}/edit', 'flightController@edit');

Route::name('update_flight')->put('/vuelos/{vuelo}', 'flightController@update');

Route::name('delete_flight')->delete('/vuelos/{flight}', 'flightController@delete');

// ------

Route::get('/profile', function(){
    return view('profile');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


// ---------------------------- OFERTA -------------------------------

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


// -------------------------------- CIUDADES ---------------------------------

Route::get('/ciudades', function(){
    return view('ciudades');
});

Route::name('create_city')->get('/ciudades', 'cityController@create');

Route::name('store_city')->post('/ciudades', 'cityController@store');

Route::get('/ciudades', 'cityController@index');

// ----

Route::get('/eliminar', function(){
    return view('eliminar');
});


// ------------------------------- RESERVAS ----------------------------------

Route::get('/reservas', function(){
    return view('reservas');
});

Route::name('create_reservation')->get('/reservas', 'reservationController@create');

Route::name('store_reservation')->post('/reservas', 'reservationController@store');

Route::get('/reservas', 'reservationController@index');

// ------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// -------------------------------- HOTELES ---------------------------------

Route::get('/hoteles', function(){
    return view('hoteles');
});


Route::name('create_hotel')->get('/hoteles', 'hotelController@create');

Route::name('store_hotel')->post('/hoteles', 'hotelController@store');

Route::name('index_hotel')->get('/hoteles', 'hotelController@index');



Route::get('/imagenes', function(){
    return view('imagenes');
});



