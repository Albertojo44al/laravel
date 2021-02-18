<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\producto;


class ProductosController extends Controller
{
    
    public function crearProducto(){
        return view('productos.crearProducto');
    }

    public function guardarProducto(Request $request){
        //validar formulario
        $validarData = $this->validate($request,[
            'nombre' => 'required',
            'descipcion' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
            'imagen' => 'mimes:mp3',
        ]);
    }
}
