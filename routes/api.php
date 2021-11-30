<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('usuario')->group(function(){
    Route::put('/crear',[UsuariosController::class,'crear']);
    Route::post('/desactivar/{id}',[UsuariosController::class,'desactivar']);
    Route::post('/editar/{id}',[UsuariosController::class,'editar']);
    Route::get('/listar',[UsuariosController::class,'listar']);
    Route::get('/ver/{id}',[UsuariosController::class,'ver']);
});


Route::prefix('curso')->group(function(){
    Route::put('/crear',[CursosController::class,'crear']);
    Route::get('/listar',[CursosController::class,'listar']);
});

Route::prefix('video')->group(function(){
    Route::put('/crear',[VideosController::class,'crear']);
});