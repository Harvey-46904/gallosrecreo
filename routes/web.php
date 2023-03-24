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

Route::get('dash',"UserController@dashboards");


Route::get('/', function () {
    return view('Login.signin');
});

Route::get("/crear_usuario","UserController@Crear_usuario");
Route::post("Iniciar_Sesion","UserController@Iniciar_Sesion");
Route::post("logout","UserController@logout");
Route::resource("ave","AvesController");
Route::resource("eventos","EventoController");
Route::get("vacuna/create","EventoController@formulario_registrar_vacuna");
Route::get("hc/create","HClinicaController@formulario_hc");
Route::post("Consulta_hc","HClinicaController@consulta_historia_clinica");
Route::post("agregar_vacuna","HClinicaController@agregar_vacuna");



