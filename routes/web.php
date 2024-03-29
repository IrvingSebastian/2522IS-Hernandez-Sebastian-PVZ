<?php

use Illuminate\Support\Facades\Route;

//Usar ambos Controladores
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AnimalController;

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

//Vistas Normales
Route::get('/', [ApiController::class,'raiz']) ->name('raiz');
Route::get('/index', [ApiController::class,'index']) ->name('index');
Route::get('/acercaDe', [ApiController::class,'acercaDe']) ->name('acercaDe');
Route::get('/indexD', [ApiController::class,'indexD']) ->name('indexD');

//Vistas Animales y Dinosaurios
Route::get('/animales/{id}', [ApiController::class,'animales']) ->name('animales');
Route::get('/dinosaurios/{id}', [ApiController::class,'dinosaurios']) ->name('dinosaurios');

//Vista del JSON de la Base de Datos
Route::get('/consultarAnimales', [AnimalController::class,'consultarAnimales']) ->name('consultarAnimales');
Route::get('/consultarAnimal/{id}', [AnimalController::class,'consultarAnimal']) ->name('consultarAnimal');
