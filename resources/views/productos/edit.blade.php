@extends('layouts.app')

@section('content')

<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Modificar producto
         </div>
         <div class="card-body" style="padding:30px">

            <form action="{{ url('/productos/edit') }}" method="POST">
            	{{method_field('PUT')}}
	            @csrf
	            <input type="hidden" name="id" id="id" value="{{ $producto->id}}">

	            <div class="form-group">
	               <label for="nombre">Nombre</label>
	               <input type="text" name="nombre" id="nombre" class="form-control" value="{{$producto->nombre}}">
	            </div>

	            <div class="form-group">
	            	<label for="precio">Precio</label>
	               <input type="number" name="precio" id="precio" value="{{$producto->precio}}"> 
	            </div>

	            <div class="form-group">
	            	<label for="categoria">Categoria</label>
	               <input type="text" name="categoria" id="categoria" class="form-control" value="{{$producto->categoria}}">
	            </div>

	            <div class="form-group">
	            	<label for="imagen">Imagen</label>
	               <input type="text" name="imagen" id="imagen" class="form-control" value="{{$producto->imagen}}"> 
	            </div>

	            <div class="form-group">
	               <label for="descripcion">Descripcion</label>
	               <textarea name="descripcion" id="descripcion" class="form-control" rows="3" value="{{$producto->descripcion}}"></textarea>
	            </div>

	            <div class="form-group text-center">
	               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
	                   Modificar producto
	               </button>
	            </div>

            </form>

         </div>
      </div>
   </div>
</div>

@stop