<?php


use App\Livewire\Dashboard;

use App\Livewire\Sensores\SensorCreate;
use App\Livewire\Sensores\SensorEdit;
use App\Livewire\Sensores\SensorList;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);


use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteDelete;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Livewire\Auth\Login;
use App\Livewire\Sensores\SensorDelete;

Route::prefix('ambiente')->group(function () {
    Route::get('/', AmbienteList::class)->name('ambiente.list');
    Route::get('/create', AmbienteCreate::class)->name('ambiente.create');
    Route::get('/{id}/edit', AmbienteEdit::class)->name('ambientes.edit');
    Route::get('/ambiente/{id}/delete',AmbienteDelete::class)->name('ambiente.delete');
});


Route::get('/sensor/create', SensorCreate::class)->name('sensors.create');
Route::get('/sensor/list', SensorList::class)->name('sensors.list');
Route::get('/sensor/{id}/edit', SensorEdit::class)->name('sensors.edit');
Route::get('/sensor/{id}/delete',SensorDelete::class)->name('sensors.delete');

use App\Livewire\Registro\RegistroList;

Route::get('/login', Login::class)->name('login');
Route::get('/dashboars', Dashboard::class)->name('dashboard');
Route::get('/registro/list', RegistroList::class)->name('registro.list');


