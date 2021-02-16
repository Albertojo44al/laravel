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

Route::get('/', function () { //LLAMA EL ARCHIVO PHP
    return view('welcome');
});

Route::post('/catalogo', function(){
    return view('catalogo.catalogo');         //LLAMA EL ARCHIVO PHP
});

Route::get( '/catalogo/{producto?}/{precio?}', function ($producto = "Pantalla lcd", $precio = null) { //VALORES POR DEFECTO
    // return view('catalogo', array( //RETORNA VALORES AL PHP                                  
    //     "producto" => $producto,
    //     "precio" => $precio
    // ));ç
    return view('catalogo.catalogo')->with('producto', $producto)
                                    ->with('precio', $precio)
                                    ->with('elementos',array('RAM','CAMARA','MONITOR','DISCO DURO','TECLADO'));
})->where([     //CONDICIONES                        
    'producto' => '[A-Za-z]+',   
    "precio" => '[0-9]+'
]);

Route::get('/catalogofunction','catalogoController@index');