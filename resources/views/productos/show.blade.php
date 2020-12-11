@extends('layouts.app')

@section('content')

	<div class="row">

    <div class="col-sm-4">

          <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

    </div>
    <div class="col-sm-8">

         <h4> Nombre: {{$producto->nombre}}</h4>
         <h6>Categoría: {{$producto->categoria}}</h6>
         @if($producto->pendiente )
         		<a class="btn btn-primary" href="#" style="background-color: red; border-color: red">Pendiente de compra</a>
                @else
                <a class="btn btn-primary" href="#" style="background-color: red; border-color: red">Comprar</a>
                @endif
                <br>
                 
                <br>
                <br>
                <a class="btn btn-primary" href="http://listacompra.test/productos/" >Volver a productos</a>
                <a class="btn btn-primary" href="{{ url('/productos/edit/' . $producto->id) }}"> Editar producto</a>


    </div>
</div>

@stop