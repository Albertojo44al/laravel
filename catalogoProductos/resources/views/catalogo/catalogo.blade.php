

@extends('layouts.navbar')

@section('title', 'Catalogo')

@section('header')
@parent()     {{--llama al contenido del padre--}}
    <h1>Probando</h1>
    
@stop
@section('content')
    <p> Contenido de la vista</p>

@stop



<h1>  Producto: {{$producto}} {{--isset($precio) && !is_null($precio) ? $precio: 'Precio no definido' --}} </h1>
{{-- hola --}}

@if(is_null($precio))
    Precio no definido
@else 
    Precio definido : {{$precio}}
@endif

<p>
    <?php $numero = 20; ?>  {{--DECLARAR VARIABLES  --}}
    Tabla del {{$numero}}
</p>

@for($i = 0; $i <= 10; $i++)
    {{$i.' x '.$numero.' = '.($i*$numero)}} <br>
@endfor


{{ $i = 0 }}    {{--DECLARAR VARIABLES  --}}
@while($i < 7)
    <p> {{'hola mundo'.$i}} </p>
    <?php $i++; ?> 
@endwhile

<ul>
@foreach($elementos as $elemento)
    <li>{{$elemento}}</li> 
@endforeach
</ul>