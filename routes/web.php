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

Route::get('/directorio', function () {
    return view('directorio');
});

Route::get('/buscar', function () {
    return view('buscar');
});

Route::get('/agregar', function () {
    return view('agregarcontacto');
});

Route::get('/eliminar', function () {
    return view('directorio');
});

Route::get('/vercontactos', function () {
    return view('vercontactos');
});


Route::get('/directorio/crearEntrada',[directorio::class,'create'])->name('crear.entrada');

Route::get('/directorio/crear', [DirectorioController::class, 'create'])->name('directorio.crear');
Route::get('/directorio/buscar', [DirectorioController::class, 'search'])->name('directorio.buscar');