<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\datoscontroller;
use App\Http\Controllers\homecontroller;
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


Route::get('contactanos',[ContactanosController::class,'index'])->name('correo.index');

//Route::get('/', homecontroller::class);

Route::get('inicio',[datoscontroller::class,'principal'])->name('inicio.principal');

Route::post('contactanos',[ContactanosController::class,'store'])->name('contactanos.store');

Route::post('correo',[ContactanosController::class,'store'])->name('email.store');

Route::get('edicion/{datos}/edit',[datoscontroller::class,'edit'])->name('edicion.edit');

Route::put('edicion/{datos}',[datoscontroller::class,'update'])->name('edicion.update');

Route::delete('edicion/{datos}',[datoscontroller::class,'destroy'])->name('edicion.destroy');

Route::post('import-list-excel',[ContactanosController::class,'excel'])->name('datos.import.excel');