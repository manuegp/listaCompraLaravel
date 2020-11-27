@extends('layouts.master')

@section('content')

	<div class="row">

    <div class="col-sm-4">

          <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

    </div>
    <div class="col-sm-8">

         <h4> Nombre: {{$productos[0]}}</h4>
         <h6>Categoría: {{$productos[1]}}</h6>
         @if($productos)
         		Producto actualmente comprado
                @endif
                <br>
                 <a class="btn btn-primary" href="#" style="background-color: red; border-color: red">Pendiente de compra</a>
                <br>
                <br>
                <a class="btn btn-primary" href="http://listacompra.test/productos/" >Volver a productos</a>
                <a class="btn btn-primary" href="{{ url('/productos/edit/' . $id ) }}"> Editar producto</a>


    </div>
</div>

@stop