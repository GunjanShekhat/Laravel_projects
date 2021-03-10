<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function loginCheck(Request $req){
        $user = User::where('userEmail',$req->Email)->get()->first();
        if(!empty($user)){
            if ($req->Password === $user->userPassword) {
               $req->session()->put('user_name',$user->userName);
               return view('dashboard'); 
            } else {
                return back()->with('pass_error','Password is Incorrect');
            }
        }
        else{
            return back()->with('user_error','User does not exist');
        }
    }

    function userCreate(Request $req){
        $user = new User();
        $user->userName = $req->u_name;
        $user->userEmail = $req->u_email;
        $user->userPassword = $req->u_password;
        $user->userContactNo = $req->u_contact;
        $user->userAddress = $req->u_address;
        $user->userArea = $req->u_area;
        $user->userCity = $req->u_city;
        $user->userState = $req->u_state;
        $user->userOccupation = $req->u_occupation;
        $user->save();
        return redirect('login')->with('user_created','User has been successfully Created!!');
    }
}