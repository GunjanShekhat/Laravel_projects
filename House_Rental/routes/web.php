<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    if(session()->has('user')){
        return redirect('profile');
    }
    return view('login');
});

Route::get('/profile', function () {
    if(session()->has('user')){
        return view('userProfile');
    }
    return redirect('login');
});
Route::post('userCheck',[UserAuth::class,'userLogin']);

Route::get('/logout', function () {
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});

Route::get('/contact', function () {
    return view('contact');
});