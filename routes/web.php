<?php

use App\Http\Controllers\FamiliaController;
use Illuminate\Support\Facades\Route;

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


Route::controller(FamiliaController::class)->group(function(){
    Route::get('/familias', 'index');
    Route::get('familias/ver/{id}', 'getById');
    Route::get('familias/nueva', 'formFamilia');
    Route::post('familias/crear', 'postFamilia');
    Route::get('familias/editar/{id}', 'formEditFamilia');
    Route::put('familias/actualizar', 'putFamilia');
});
