<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Mail\Notificaciones;
use Illuminate\Support\Facades\Mail;
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
    return view('auth.login');
});

Route::get('/envio-mail', function () {
    
    $respuesta= Mail::to('remito@notificaciones.dpt.gba.gob.ar')->send(new Notificaciones('oscar')); //el metodo send envia lo que contiene el mail 
    
});

Route::get('generate-pdf', [App\Http\Controllers\ReceptorController::class, 'generatePDF'])->name('receptores.pdf');

//Route::get('/productos/pdf', [App\Http\Controllers\ProductoController::class, 'pdf'])->name('productos.pdf');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('receptores.index');

//Route::get('/productos/buscar', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos.buscar');


Auth::routes([
    'register' => true,
    'verify' => true,
    'reset' => true
    ]);


Route::resource('receptores', App\Http\Controllers\ReceptorController::class);
