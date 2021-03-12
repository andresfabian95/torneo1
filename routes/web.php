<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Localidadcontroller;
use App\Http\Controllers\Equipocontroller;
use App\Http\Controllers\Jugadorcontroller;

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

Route::get('localidades',[LocalidadController::class,'index'])->name('Localidad.index');
Route::get('localidades/create',[Localidadcontroller::class,'create'])->name('Localidad.create');
Route::post('localidades',[LocalidadController::class,'store'])->name('Localidad.store');
Route::get('localidades/{id}',[LocalidadController::class,'show'])->name('Localidad.show');
Route::delete('localidade/{id}',[LocalidadController::class,'destroy'])->name('Localidad.destroy');
Route::get('localidades/edit/{id}',[LocalidadController::class,'edit'])->name('Localidad.edit');
Route::put('localidades/{id}',[LocalidadController::class,'update'])->name('Localidad.update');
