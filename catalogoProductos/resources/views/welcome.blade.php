@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-10">
        @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
        @if(session('carrito'))
        <div class="alert alert-success">
            ¡Producto agregado al carrito!
        </div>
        @endif
      </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading text-center">CATALOGO</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <ul id="producto-list">
                @foreach ($productos as $prod)
                    <div class="col-md-4">
                        <div class="panel panel-size panel-default">  
                            <div class="panel">
                                    <div class="text-right">
                                        <a class="btn btn-success" href="{{route('carrito')}}">  <img src="{{ asset('images/carrito-de-compras.png') }}"></a>
                                    </div>
                            </div>
                           
                            @if(Storage::disk('images')->has($prod->image))
                                <div data-toggle="modal" data-target="#modalDetalle{{$prod->id}}" href={{url('/producto/'.$prod->id)}} class="img-mask pointer">
                                    <img class="card-img-top producto-imagen" src="{{url('/imagen/'.$prod->image)}}" alt="Card image cap">
                                </div>    
                            @endif
                            <div data-toggle="modal" data-target="#modalDetalle{{$prod->id}}" href={{url('/producto/'.$prod->id)}}  class="panel-body text-center pointer">
                                <div class="text-right">
                                   
                                </div>
                                <hr>
                                <h4>{{$prod->name}}</h4>
                               
                                <label> Cantidad:  {{$prod->quantity}} </label>  	 &nbsp;&nbsp;&nbsp;&nbsp;
                                <label> Precio: L {{number_format( $prod->price, 2, '.', '')}} </label>
                               
                            </div>
                        </div> 
                    </div>
                    <!-- Modal visualizar -->
                    <div class="modal fade" id="modalDetalle{{$prod->id}}" tabindex="-1" role="dialog" aria-labelledby="modalDetalle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body text-center">
                                      
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>

                @endforeach
            </ul>
            
           
            
        </div>
        <div class="panel-footer"> {{$productos->links()}}</div>
    </div>
@endsection
