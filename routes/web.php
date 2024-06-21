<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllerWeb;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function(){return view('login');});
Route::post('/login',[AuthController::class, 'Login']);
Route::get('/home',[HomeControllerWeb::class, 'LoadHomePage']);
Route::get('/addTask',function(){return view('addTask');});
Route::post('/addTaskRequest',[HomeControllerWeb::class, 'AddTaskAndRealoadHomePage']);
Route::get('/editTaskPage/{id}',[HomeControllerWeb::class, 'EditTaskPage']);
Route::put('/editTaskRequest/{id}',[HomeControllerWeb::class, 'EditTaskRequest']);
Route::get('/deleteTaskRequest/{id}',[HomeControllerWeb::class, 'DeleteTaskRequest']);