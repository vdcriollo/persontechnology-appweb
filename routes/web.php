<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('contacto.enviar');
