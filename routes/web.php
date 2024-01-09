<?php

use App\Livewire\MostrarEmpresa;
use App\Livewire\MostrarEmpresas;
use Illuminate\Support\Facades\Route;





Route::get('/empresas', MostrarEmpresas::class)->name('empresas');
Route::get('/empresa/{id}', MostrarEmpresa::class)->name('empresa');


