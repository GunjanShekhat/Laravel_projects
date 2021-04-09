<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HouseDetailController;
use App\Http\Controllers\AdminController;
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
Route::post('userUpdate',[UserController::class,'updateProfile']);

Route::get('browse_houses',[HouseDetailController::class,'getHouses']);

Route::get('/myHouses',[HouseDetailController::class,'getMyHouse'])->name('myHouses');
Route::get('/bookedHouses',[HouseDetailController::class,'bookedHouses']);
Route::get('/addHouse', function () {
    if (session()->has('user_email')) {
        return view('User/addHouse');
    }
    else{
        return redirect('login');
    }
});
Route::post('/addHouse',[HouseDetailController::class,'newHouse'])->name('newHouse');
Route::get('/singleHouse',[HouseDetailController::class,'singleHouse'])->name('singleHouse');
Route::post('/bookHouse',[HouseDetailController::class,'bookHouse'])->name('bookHouse');
Route::get('/deleteHouse',[HouseDetailController::class,'deleteHouse'])->name('deleteHouse');
Route::get('/editHouse',[HouseDetailController::class,'editHouse'])->name('editHouse');
Route::post('/updateHouse',[HouseDetailController::class,'updateHouse'])->name('updateHouse');

Route::get('Contact',function(){
    return view('User/contact');
});
Route::post('/contactForm',[UserController::class,'contactFormMail'])->name('contactFormMail');
Route::get('About', function () {
    return view('User/about');
});

/* -------------------------------ADMIN SIDE ROUTES------------------------------*/

Route::get('/dashboard',[AdminController::class,'dashboard']);
Route::get('/users',[UserController::class,'allUsers']);
Route::get('/houses',[HouseDetailController::class,'allHouses']);
Route::get('/reports',function(){
    return view('Admin/reports');
});
Route::get('/usersPDF',[UserController::class,'downloadPDF']);
Route::get('/latestUsersPDF',[UserController::class,'latestUsersPDF']);
Route::get('/housesPDF',[HouseDetailController::class,'downloadPDF']);
Route::get('/latestHousesPDF',[HouseDetailController::class,'latestHousesPDF']);