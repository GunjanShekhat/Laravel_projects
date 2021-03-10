<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('User/welcome');
});

Route::get('login', function () {
    return view('User/login');
});
Route::post('loginCheck',[UserController::class,'loginCheck']);

Route::get('signup', function () {
    return view('User/signup');
});
Route::post('userCreate',[UserController::class,'userCreate']);

Route::get('Profile',[UserController::class,'editProfile']);