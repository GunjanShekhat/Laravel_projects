<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use PDF;

use App\Mail\contactUsMail;

class UserController extends Controller
{
    function loginCheck(Request $req){
        $user = User::where('userEmail',$req->Email)->get()->first();
        if(!empty($user)){
            if ($req->Password === $user->userPassword) {
               $req->session()->put('user_email',$user->userEmail);
               $req->session()->put('user_name',$user->userName);
               $req->session()->put('user_id',$user->userId);
               return redirect('/'); 
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

    function editProfile(){
        if (session()->has('user_email')) {
            $userDetail = User::where('userEmail', session()->get('user_email'))->get()->first();
            return view('user/profile', compact('userDetail'));
        }
        else{
            return redirect('/login');
        }
    }

    function updateProfile(Request $req){
        User::where('userEmail', $req->u_email)->update(['userName' => $req->u_name,'userContactNo' => $req->u_contact,'userAddress' => $req->u_address,'userArea' => $req->u_area, 'userCity' => $req->u_city, 'userState' => $req->u_state, 'userOccupation' => $req->u_occupation]);
        return back();
    }

    function contactFormMail(Request $req){
        $details = [
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message,
        ];

        Mail::to('shekhatgunjan98@gmail.com')->send(new contactUsMail($details));
        return back()->with('mailSent','Your message has been sent successfully!');
        
    }

    function allUsers(){
        $users = User::all();
        return view('Admin\users',compact('users'));
    }

    function downloadPDF(){
        $users = User::all();
        $pdf = PDF::loadView('Admin\usersPDF',compact('users'));
        return $pdf->download('users.pdf');
    }
    
    function latestUsersPDF(){
        $users = User::orderBy('userId','DESC')->take(30)->get();
        $pdf = PDF::loadView('Admin\usersPDF',compact('users'));
        return $pdf->download('users.pdf');
    }
}