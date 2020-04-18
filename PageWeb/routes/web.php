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

Route::get('/', 'PageController@inicio')->name('inicio');

Route::get('/detalle/{id}', 'PageController@detalle')->name('nota.detalle');

Route::post('/', 'PageController@crear')->name('notas.crear');

Route::get('/editar/{id}', 'PageController@editar')->name('nota.editar');

Route::put('/editar/{id}' , 'PageController@update')->name('nota.update');

Route::delete('/eliminar/{id}' , 'PageController@eliminar')->name('nota.eliminar');

Route::get('/bloger', 'PageController@blog')->name('noticias');

Route::get('/imagenes', 'PageController@fotos')->name('galerias');

Route::get('/control/{nombre?}', 'PageController@equipo')->name('about');



/* route with parameter
Route::get('fotos/{numero?}',function($numero = 'sin numero'){
    return 'galeria de fotos : '.$numero;
});

/* route with parameter and conditional
Route::get('fotos/{numero?}',function($numero = 'sin numero'){
    return 'galeria de fotos : '.$numero;
})->where('numero','[0-9]+');

/*route return view
Route::view('galerias','fotos',['numero' => 125]);

/*hacer 
Route::get('imagenes', function () {
    return view('fotos');
})->name('galerias');
*/
