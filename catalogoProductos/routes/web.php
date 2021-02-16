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
    return view('welcome');
});

Route::post('/catalogo', function(){
    return view('catalogo');         //LLAMA EL ARCHIVO PHP
});

Route::get( '/catalogo/{producto?}/{precio?}', function ($producto = "Pantalla lcd", $precio = "500") { //VALORES POR DEFECTO
    return view('catalogo', array( //RETORNA VALORES AL PHP                                  
        "producto" => $producto,
        "precio" => $precio
    ));
})->where([     //CONDICIONES                        
    'producto' => '[A-Za-z]+',   
    "precio" => '[0-9]+'
]);