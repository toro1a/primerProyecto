<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\miControlador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get("/",[miControlador::class,'index'])->name('index');
Route::get("/crear",[miControlador::class,'create'])->name('crear');
Route::get("/mostrar",[miControlador::class,'show'])->name('mostrar');
Route::get("/articulos",[miControlador::class,'store'])->name('articulos');
Route::get("/contacto",[miControlador::class,'contactar'])->name('contacto');

