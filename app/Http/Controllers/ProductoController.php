<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
   public function getIndex(){
    
   return view('productos');
   }

   public function getShow($id){
    
    return view('productos.show', array('id'=>$id));
	}

   public function getCreate(){
    
    return view('productos.create');
	}
   
   public function getEdit($id){
    
    return view('productos.edit', array('id'=>$id));
	}    
}
