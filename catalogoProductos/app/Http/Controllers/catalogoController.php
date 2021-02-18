<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catalogoController extends Controller
{
    // Accion que devuelva una vista

    public function index(){
        return view('catalogo.catalogo')->with('producto', 'RAM')
                                        ->with('precio', 500)
                                        ->with('elementos',array('RAM','CAMARA','MONITOR','DISCO DURO','TECLADO'));

    }
}
