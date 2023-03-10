<?php

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
    return view('webdashboar.index');
});

Route::resource("ave","AvesController");
Route::resource("eventos","EventoController");
Route::get("vacuna/create","EventoController@formulario_registrar_vacuna");
Route::get("hc/create","HClinicaController@formulario_hc");
Route::post("Consulta_hc","HClinicaController@consulta_historia_clinica");
