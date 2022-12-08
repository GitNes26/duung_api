<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubjetController;
use App\Http\Controllers\DifficultController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TypesQuestionController;
use App\Http\Controllers\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', [UserController::class,'login']);
Route::post('/signup', [UserController::class,'signup']);

Route::middleware('auth:sanctum')->controller(UserController::class)->group(function () {
    Route::get('/users','index');           //mostrar lista
    Route::get('/users/{id}','show');       //mostrar objeto
    Route::post('/users','store');          //crear objeto
    Route::put('/users','update');          //actualizar objeto
    Route::delete('/users/{id}','destroy'); //eliminar (cambiar activo=false)

    Route::delete('/logout/{id}','logout'); //cerrar sesión (eliminar los tokens creados)
});

Route::middleware('auth:sanctum')->controller(RoleController::class)->group(function () {
    Route::get('/roles','index');
    Route::get('/roles/{id}','show');
    Route::post('/roles','store');
    Route::put('/roles','update');
    Route::delete('/roles/{id}','destroy');
});

Route::middleware('auth:sanctum')->controller(SubjetController::class)->group(function () {
    Route::get('/subjets','index');
    Route::get('/subjets/{id}','show');
    Route::post('/subjets','store');
    Route::put('/subjets','update');
    Route::delete('/subjets/{id}','destroy');
});

Route::middleware('auth:sanctum')->controller(DifficultController::class)->group(function () {
    Route::get('/difficults','index');
    Route::get('/difficults/{id}','show');
    Route::post('/difficults','store');
    Route::put('/difficults','update');
    Route::delete('/difficults/{id}','destroy');
});

Route::middleware('auth:sanctum')->controller(AnswerController::class)->group(function () {
    Route::get('/answers','index');
    Route::get('/answers/{id}','show');
    Route::post('/answers','store');
    Route::put('/answers','update');
    Route::delete('/answers/{id}','destroy');
});

Route::middleware('auth:sanctum')->controller(GameController::class)->group(function () {
    Route::get('/games','index');
    Route::get('/games/{id}','show');
    Route::post('/games','store');
    Route::put('/games','update');
    Route::delete('/games/{id}','destroy');
});

Route::middleware('auth:sanctum')->controller(ItemController::class)->group(function () {
    Route::get('/items','index');
    Route::get('/items/{id}','show');
    Route::post('/items','store');
    Route::put('/items','update');
    Route::delete('/items/{id}','destroy');
});

Route::middleware('auth:sanctum')->controller(TypesQuestionController::class)->group(function () {
    Route::get('/types_q','index');
    Route::get('/types_q/{id}','show');
    Route::post('/types_q','store');
    Route::put('/types_q','update');
    Route::delete('/types_q/{id}','destroy');
});

Route::middleware('auth:sanctum')->controller(TipController::class)->group(function () {
    Route::get('/tips','index');
    Route::get('/tips/{id}','show');
    Route::post('/tips','store');
    Route::put('/tips','update');
    Route::delete('/tips/{id}','destroy');
});