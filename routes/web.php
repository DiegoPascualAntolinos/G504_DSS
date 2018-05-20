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
//-----------------------------------------------------------------

Route::group(['middleware' => 'isAdmin'], function () {

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

    Route::name('edit_flightAdmin')->get('/vueloAdmin/{vuelo}/edit', 'flightController@editAdmin');

    Route::name('update_flightAdmin')->put('/vueloAdmin/{vuelo}', 'flightController@updateAdmin');

    Route::name('delete_flight')->delete('/vueloAdmin/{flight}', 'flightController@deleteAdmin');

    Route::name('index_flightAdmin')->get('/vueloAdmin', 'flightController@indexAdmin');


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



    // --------------------- listar, añadir, editar, borrar usuarios -------------------------

    Route::get('/usuarios', function(){
        return view('usuarios');
    });
    
    Route::name('create_user')->get('/usuarios', 'userController@create');

    Route::name('store_user')->post('/usuarios', 'userController@store');

    Route::name('index_user')->get('/usuarios', 'userController@index');

    Route::name('edit_user')->get('/usuarios/{usuario}/edit', 'userController@edit');

    Route::name('update_user')->put('/usuarios/{usuario}', 'userController@update');

    Route::name('delete_user')->delete('/usuarios/{user}', 'userController@delete');


    // --------------------------- listar, añadir ciudades ---------------------------

    Route::get('/ciudades', function(){
        return view('ciudades');
    });

    Route::name('create_city')->get('/ciudades', 'cityController@create');

    Route::name('store_city')->post('/ciudades', 'cityController@store');

    Route::get('/ciudades', 'cityController@index');

    //es deuen de poder borrar ciutats?

});

// -------------------------- FIN ADMIN -------------------------





// ------ AUTH SOLES (USUARI) -----------------------

Route::group(['middleware' => 'auth'], function () {


// --------------------- Perfil usuario --------------------

Route::get('/profile/{id}', 'offerController@indexProfile');

Route::name('settings')->put('/profileSettings/{id}', 'userController@updateProfileSettings');

Route::post('/profileSettings/{id}', 'userControl@profileUpdate');

//http://blog.medhicham.com/en/blog-en/10-steps-to-get-you-on-image-profile-upload-for-laravel-5.html
//Queda poner el nombre a todos los recuadritos
Route::get('/profileSettings/{id}', function(){
    return view('profileSettings');
});

//Route::name('settings')->get('/profileComments', '');

Route::get('/profileComments/{id}', function(){
    return view('profileComments');
});

// ------------------- Fin Perfil usuario ------------------


//--- ver, crear ofertas ---

Route::name('create_offer')->get('/oferta', 'offerController@create');

Route::name('store_offer')->post('/oferta', 'offerController@store');


//--- ver, hacer mis reservas ---

Route::get('/reservas', 'reservationController@index');

Route::get('/reservas', function(){
    return view('reservas');
});

Route::name('create_reservation')->get('/reservas', 'reservationController@create');

Route::name('store_reservation')->post('/reservas', 'reservationController@store');


//--- validar borrado ---
Route::get('/eliminar', function(){
    return view('eliminar');
});

});

//-------------------------- FIN USUARIO -----------------------------------------------
//-----------------------------------------------------------------------------



// ---------------------------------- PUBLIC -----------------------------------
//------------------------------------------------------------------------------

Route::get('/', function(){
    return view('mainPage');
});


Route::name('mainPage')->get('/main', function () {
    return view('mainPage');
 });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//listar vuelos
Route::name('index_flight')->get('/vuelos', 'flightController@index');



//listar ofertas
Route::name('index_offer')->get('/oferta', 'offerController@index');


//listar hoteles
Route::name('index_hotel')->get('/hoteles', 'hotelController@index');




//galeria
Route::get('/imagenes', function(){
    return view('imagenes');
});


//--- contactanos
Route::get('/contacto', function(){
    return view('contacto');
});

//------------------- FIN PUBLIC ---------------------------------
//----------------------------------------------------------------





// ------------------------------ DUDA -----------------------------------

// ja estan implementades en admin, usuari pot tambe afegir vols?

/*
Route::name('create_flight')->get('/vuelos', 'flightController@create');

Route::name('store_flight')->post('/vuelos', 'flightController@store');

Route::name('edit_flight')->get('/vuelos/{vuelo}/edit', 'flightController@edit');

Route::name('update_flight')->put('/vuelos/{vuelo}', 'flightController@update');

Route::name('delete_flight')->delete('/vuelos/{flight}', 'flightController@delete');


//ja implementat en admin
Route::name('edit_offer')->get('/oferta/{oferta}/edit', 'offerController@edit');

Route::name('update_offer')->put('/oferta/{oferta}', 'offerController@update');

Route::name('delete_offer')->delete('/oferta/{offer}', 'offerController@delete');


//ja implementat en admin
Route::name('create_hotel')->get('/hoteles', 'hotelController@create');

Route::name('store_hotel')->post('/hoteles', 'hotelController@store');


// esta per a que?????
Route::delete('/oferta/{id}', function($id){

    Offer::findOrFail($id)->delete();
    return redirect('/oferta');
});
*/