<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\Ficha_tecnicaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PadresController;
use App\Http\Controllers\InstitucionesController;
use App\Http\Controllers\AlertasController;
use App\Http\Controllers\MonitoresController;

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


Route::resource('vehiculo', VehiculoController::class);

Route::resource('conductor', ConductorController::class);

Route::resource('/rutas', RutaController::class);

Route::resource('/estudiante', EstudianteController::class);

Route::resource('/ficha_tecnica', Ficha_tecnicaController::class);

Route::resource('/padres', PadresController::class);

Route::resource('/instituciones', InstitucionesController::class);

Route::resource('/alertas', AlertasController::class);

Route::resource('/monitores', MonitoresController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
