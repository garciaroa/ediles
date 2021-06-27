<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProyectoController;
use App\Http\Controllers\Admin\ComunaController;
use App\Http\Controllers\Admin\CorregimientoController;
use App\Http\Controllers\Admin\BarrioController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\EscolaridadController;
use App\Http\Controllers\Admin\ModalidadController;
use App\Http\Controllers\Admin\EstadoController;

Route::get('',[HomeController::class,'index']);
Route::get('/editar/{id}',[HomeController::class,'edit']);

Route::get('/listarEscolaridad',[EscolaridadController::class,'index']);
Route::get('/adicionarEscolaridad',[EscolaridadController::class,'create']);
Route::post('/adicionarNuevaEscolaridad',[EscolaridadController::class,'createNew']);
Route::get('/editarEscolaridad/{id}',[EscolaridadController::class,'edit']);
Route::post('/actualizarEscolaridad',[EscolaridadController::class,'update']);

Route::get('/listarRoles',[RolController::class,'index']);
Route::get('/adicionarRol',[RolController::class,'create']);
Route::post('/adicionarNuevoRol',[RolController::class,'createNew']);
Route::get('/editarRol/{id}',[RolController::class,'edit']);
Route::post('/actualizarRol',[RolController::class,'update']);

Route::get('/listarProyecto',[ProyectoController::class,'index']);
Route::get('/adicionarProyecto',[ProyectoController::class,'create']);
Route::post('/adicionarNuevoProyecto',[ProyectoController::class,'createNew']);
Route::get('/editarProyecto/{id}',[ProyectoController::class,'edit']);
Route::post('/actualizarProyecto',[ProyectoController::class,'update']);
Route::get('/verProyecto/{id}',[ProyectoController::class,'show']);
Route::get('/inhabilitarProyecto/{id}',[ProyectoController::class,'inhabilitar']);


Route::get('/listarComuna',[ComunaController::class,'index']);
Route::get('/adicionarComuna',[ComunaController::class,'create']);
Route::post('/adicionarNuevaComuna',[ComunaController::class,'createNew']);
Route::get('/editarComuna/{id}',[ComunaController::class,'edit']);
Route::post('/actualizarComuna',[ComunaController::class,'update']);


Route::get('/listarCorregimiento',[CorregimientoController::class,'index']);
Route::get('/adicionarCorregimiento',[CorregimientoController::class,'create']);
Route::post('/adicionarNuevoCorregimiento',[CorregimientoController::class,'createNew']);
Route::get('/editarCorregimiento/{id}',[CorregimientoController::class,'edit']);
Route::post('/actualizarCorregimiento',[CorregimientoController::class,'update']);

Route::get('/listarBarrio',[BarrioController::class,'index']);
Route::get('/editarBarrio/{id}',[BarrioController::class,'edit']);
Route::post('/actualizarBarrio',[BarrioController::class,'update']);
Route::get('/adicionarBarrio',[BarrioController::class,'create']);
Route::post('/adicionarNuevoBarrio',[BarrioController::class,'createNew']);
Route::post('/todosbarrios',[BarrioController::class,'indexAjax']);


Route::get('/listarModalidad',[ModalidadController::class,'index']);
Route::get('/editarModalidad/{id}',[ModalidadController::class,'edit']);
Route::post('/actualizarModalidad',[ModalidadController::class,'update']);
Route::get('/adicionarModalidad',[ModalidadController::class,'create']);
Route::post('/adicionarNuevaModalidad',[ModalidadController::class,'createNew']);

Route::get('/listarEstados',[EstadoController::class,'index']);
Route::get('/editarEstado/{id}',[EstadoController::class,'edit']);
Route::post('/actualizarEstado',[EstadoController::class,'update']);
Route::get('/adicionarEstado',[EstadoController::class,'create']);
Route::post('/adicionarNuevoEstado',[EstadoController::class,'createNew']);
