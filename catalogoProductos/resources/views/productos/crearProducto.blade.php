@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h2>agregar un nuevo producto</h2>
                <hr>
            </div>
            <div class="card-body text-center">
                <form action="{{ route('guardarProducto')}}" method="POST" enctype="multipart/form-data" class="col-lg-7">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="nombre"> Nombre </label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="descipcion"> Descipcion </label>
                    <textarea class="form-control" id="descipcion" name="descipcion"></textarea>
                </div>
                <div class="form-group">
                    <label for="precio"> Precio </label>
                    <input type="number" class="form-control" id="precio" name="precio">
                </div>
                <div class="form-group">
                    <label for="cantidad"> Cantidad </label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad">
                </div>
                <div class="form-group">
                    <label for="imagen"> Imagen </label>
                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/png, image/jpeg, image/jpg" >
                </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection