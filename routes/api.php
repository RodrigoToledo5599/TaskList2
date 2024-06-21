<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeControllerWeb;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/getTask/{taskId}',[TaskController::class, 'getTask']);
Route::get('/getAllTasks',[TaskController::class,'getAllTasks']);
Route::post('/createTask',[TaskController::class, 'createTask']);
Route::delete('/deleteTask/{taskId}',[TaskController::class ,'deleteTask']);
Route::put('/updateTask/{taskId}',[TaskController::class,'updateTask']);