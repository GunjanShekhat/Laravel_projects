<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\house_detail_controller;

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

Route::get('/houseDetails', function () {
    if(session()->has('user')){
        return view('houseDetails');
    }
    return view('houseDetails');
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


// Route::resource('house', 'App\Http\Controllers\house_detail_controller');
Route::get('/addHouseDetail', [house_detail_controller::class,'addHouseDetail']);
Route::post('/create-house',[house_detail_controller::class,'createHouse'])->name('house.create');

Route::post('/editHouseDetail', [house_detail_controller::class,'editHouseDetail'])->name('house.update');
Route::get('/edit-house/{id}',[house_detail_controller::class,'editHouse'])->name('house.edit');

Route::get('/delete-house/{id}',[house_detail_controller::class,'deleteHouse'])->name('house.delete');

Route::get('/browseHouse',[house_detail_controller::class,'getHouse']);

Route::get('/myHouse',[house_detail_controller::class,'getMyHouse']);