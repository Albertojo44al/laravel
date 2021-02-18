<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
    protected $table = 'carrito';

    //un carrito puede tener un usuario 
    public function users()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    //un carrito puede tener muchos productos
    public function productos()
    {
        return $this->hasMany('App\producto','product_id','product_id');
    }
}

