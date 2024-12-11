<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorV;

Route::get('/', [ControladorV::class, 'home'])->name('principal');

Route::get('/consulta', [ControladorV::class, 'select'])->name('ListadoContactos');
Route::get('/formulario', [ControladorV::class, 'create'])->name('formularioContacto');

Route::post('/cliente', [ControladorV::class, 'store'])->name('rutaenviar');

require __DIR__.'/auth.php';
