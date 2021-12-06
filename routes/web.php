<?php

use App\Http\Controllers\sys\AsistenciaController;
use App\Http\Controllers\sys\EgresoController;
use App\Http\Controllers\sys\EventoController;
use App\Http\Controllers\sys\IngresoController;
use App\Http\Controllers\sys\InscripcionController;
use App\Http\Controllers\sys\PersonaController;
use App\Http\Controllers\sys\SocioController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController as LivewireUserProfileController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('comunidad/profile', function() {
    return view('profile.comunidad.show');
})->name('comunidad.show');

Route::middleware(['auth:sanctum', 'verified'])->get('socio/profile', function() {
    return view('profile.socio.show');
})->name('socio.show');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('socios', SocioController::class);
/*     Route::resource('egreso', EgresoController::class);
    Route::resource('evento', EventoController::class);
    Route::resource('ingreso', IngresoController::class);
    Route::resource('inscripcion', InscripcionController::class);
    Route::resource('persona', PersonaController::class);
    Route::resource('asistencia', AsistenciaController::class); */
});
