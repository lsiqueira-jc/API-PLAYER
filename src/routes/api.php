<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExemploController;
use App\Http\Controllers\PlayerController;





Route::get('/',[ExemploController::class ,'index']);


// Route::group(['middleware' => ['JWTToken']], function () {

//   Route::post('/',[AgendaController::class ,'cadastrar']);

// });

// Route::get('/player',[ExemploController::class ,'index']);

Route::get('/musicas',[PlayerController::class ,'index']);



