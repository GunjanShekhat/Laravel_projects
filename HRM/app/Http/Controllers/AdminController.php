<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\houseDetail;

class AdminController extends Controller
{
    public function dashboard(){
        $users = User::all();
        $houses = houseDetail::all();
        return view('Admin/dashboard',compact('users','houses'));
    }
}