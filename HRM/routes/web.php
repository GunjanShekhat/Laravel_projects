<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HouseDetailController;
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
    return view('User/home');
});

Route::get('login', function () {
    return view('User/login');
});
Route::post('loginCheck',[UserController::class,'loginCheck']);
Route::get('/logout', function () {
    if(session()->has('user_email')){
        session()->pull('user_email');
        session()->pull('user_name');
    }
    return redirect('login');
});

Route::get('signup', function () {
    return view('User/signup');
});
Route::post('userCreate',[UserController::class,'userCreate']);

Route::get('Profile',[UserController::class,'editProfile']);

Route::get('browse_houses',[HouseDetailController::class,'getHouses']);

Route::get('/myHouses',[HouseDetailController::class,'getMyHouse']);

Route::get('Contact',function(){
    return view('User/contact');
});
Route::get('About', function () {
    return view('User/about');
});