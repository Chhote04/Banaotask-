<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[FrontController::class,'index']);



Route::get('/dashboard',[FrontController::class,'dashboard']);

//login controller

Route::get('/login',[UserController::class,'login']);
Route::post('/user_insert',[UserController::class,'user_insert']);
Route::post('/login_verification',[UserController::class,'login_verification']);
Route::get('/logout',[UserController::class,'logout']);