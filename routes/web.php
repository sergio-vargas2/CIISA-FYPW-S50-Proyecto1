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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/producto/{id?}/{codigoUnico?}/{nombre?}/{categoria?}/{sucursal?}/{descripcion?}/{cantidad?}/{precio?}', function ($id=1, $codigoUnico=1, $nombre='Sin Nombre', $categoria='Sin Categoria', $sucursal='Sin Sucursal', $descripcion="Sin Descripcion",$cantidad=0, $precio=0) {
    return view('producto')
    ->with('id', $id)
    ->with('codigoUnico', $codigoUnico)
    ->with('nombre', $nombre)
    ->with('categoria', $categoria)
    ->with('sucursal', $sucursal)
    ->with('descripcion', $descripcion)
    ->with('cantidad', $cantidad)
    ->with('precio', $precio);
});