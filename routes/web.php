<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@getHome');//Funciona
Route::get('productos', 'App\Http\Controllers\ProductoController@getIndex'); //Funciona
Route::get('productos/show/{id}', 'App\Http\Controllers\ProductoController@getShow');//Funciona
Route::get('productos/create', 'App\Http\Controllers\ProductoController@getCreate'); //Funciona
Route::get('productos/edit/{id}', 'App\Http\Controllers\ProductoController@getEdit'); //Funciona

Route::get('login', function () {
    return view('auth.login');
});

Route::get('logout', function () {
    return ('Logout usuario');
});





