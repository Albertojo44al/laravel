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
    //$users = User::all();
    // foreach($users as $user){
    //     echo $user->name.'<br>';
    //     echo $user->email.'<br>';
    //     foreach($user->productos as $producto){
    //         echo $producto->name.'<br>';
    //     }
    //     foreach($user->carritos as $carrito){
    //         echo 'carrito id:'.$carrito->car_id.'<br>';
    //         echo 'cantidad:'.$carrito->quantity.'<br>';
    //     }
    // }
    // $carrito = carrito::all();
    // foreach($carrito as $car){
    //         foreach($car->productos as $product){
    //            echo $product->name ;
    //         }

        
    // }

    // $productos = producto::all();
    // foreach($productos as $producto){
    //     echo $producto->name;
    //     echo $producto->users->name;
    // }
     return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


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