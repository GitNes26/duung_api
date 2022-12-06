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
    Route::get('/subjet','index');
    Route::get('/subjet/{id}','show');
    Route::post('/subjet','store');
    Route::put('/subjet','update');
    Route::delete('/subjet/{id}','destroy');
});

Route::middleware('auth:sanctum')->controller(DifficultController::class)->group(function () {
    Route::get('/difficult','index');
    Route::get('/difficult/{id}','show');
    Route::post('/difficult','store');
    Route::put('/difficult','update');
    Route::delete('/difficult/{id}','destroy');
});

Route::middleware('auth:sanctum')->controller(AnswerController::class)->group(function () {
    Route::get('/answer','index');
    Route::get('/answer/{id}','show');
    Route::post('/answer','store');
    Route::put('/answer','update');
    Route::delete('/answer/{id}','destroy');
});

Route::middleware('auth:sanctum')->controller(GameController::class)->group(function () {
    Route::get('/game','index');
    Route::get('/game/{id}','show');
    Route::post('/game','store');
    Route::put('/game','update');
    Route::delete('/game/{id}','destroy');
});

Route::middleware('auth:sanctum')->controller(ItemController::class)->group(function () {
    Route::get('/item','index');
    Route::get('/item/{id}','show');
    Route::post('/item','store');
    Route::put('/item','update');
    Route::delete('/item/{id}','destroy');
});

Route::middleware('auth:sanctum')->controller(TypesQuestionController::class)->group(function () {
    Route::get('/type_q','index');
    Route::get('/type_q/{id}','show');
    Route::post('/type_q','store');
    Route::put('/type_q','update');
    Route::delete('/type_q/{id}','destroy');
});