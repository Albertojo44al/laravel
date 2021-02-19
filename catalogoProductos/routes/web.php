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
use App\User;
use App\carrito;
use App\Http\Controllers\Productos;
use App\producto;
Route::get('/', function () { //LLAMA EL ARCHIVO PHP
     return redirect('/home');
});

Auth::routes();

Route::get('/home', array (
    'as' => 'home',
    'uses' => 'HomeController@index',
));


//Rutas del controlador de roductos
Route::get('/crear-productos',array(
    'as' => 'crearProducto',
    'middleware' => 'auth',
    'uses' => 'ProductosController@crearProducto'
));

Route::post('/guardar-producto', array(
    'as' => 'guardarProducto',
    'middleware' => 'auth',
    'uses' => 'ProductosController@guardarProducto'
));

Route::get('/imagen/{filename}','ProductosController@getImagenes');

Route::get('/producto/{id}', 'HomeController@getProducto');

Route::get('/borrar-producto/{id}', array(
    'as' => 'borrarProducto',
    'middelware' => 'auth',
    'uses' => 'ProductosController@borrar' 
));

Route::get('/editar-producto/{id}', array(
    'as' => 'editarProducto',
    'middelware' => 'auth',
    'uses' => 'ProductosController@editar' 
));

 Route::post('/modificar-producto/{id}', array(
    'as' => 'modificarProducto',
    'middelware' => 'auth',
    'uses' => 'ProductosController@modificarProducto' 
));

Route::get('/buscar/{busqueda?}', [
    'as' => 'busquedaProducto',
    'uses' => 'ProductosController@busqueda'
]);
