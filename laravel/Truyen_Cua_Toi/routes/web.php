<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\LoginController;
use app\Http\Controllers;
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
Route::get('/login', function () {
    return view('login/login');
});

Route::post('/login',[LoginController::class,'index']);
//C:\xampp\htdocs\my-laravel-project\Truyen_Cua_Toi\app\Http\Controllers\LoginController@index