<?php


use App\Livewire\Dashboard;

use App\Livewire\Sensores\SensorCreate;
use App\Livewire\Sensores\SensorEdit;
use App\Livewire\Sensores\SensorList;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);


use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;



Route::prefix('ambiente')->group(function () {
    Route::get('/', AmbienteList::class)->name('ambiente.list');
    Route::get('/create', AmbienteCreate::class)->name('ambiente.create');
    Route::get('/{id}/edit', AmbienteEdit::class)->name('ambientes.edit');
});


Route::get('/sensor/create', SensorCreate::class)->name('sensors.create');
Route::get('/sensor/list', SensorList::class)->name('sensors.list');
Route::get('/sensor/{id}/edit', SensorEdit::class)->name('sensors.edit');

use App\Livewire\Registro\RegistroList;


Route::get('/', Dashboard::class);
Route::get('/registro/list', RegistroList::class)->name('registro.list');


