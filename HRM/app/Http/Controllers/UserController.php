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

        $validatedData = $req->validate([
                'u_name' => 'required|alpha_num',
                'u_password' => 'required|min:6',
                'u_email' => 'required|email',
                'u_contact'=> 'required|digits:10|numeric',
                'u_address'=>'required',
                'u_area'=>'required',
                'u_city' => 'required|alpha',
                'u_state'=>'required|alpha',
                'u_occupation'=>'required|alpha',
            ], [
                'u_name.required' => 'Name is required',
                'u_password.required' => 'Password is required',
                'u_password.min' => 'Password has to be :min chars long',
                'u_email.email' => 'Email should be in proper format',
                'u_contact.required' => 'Contact is required',
                'u_contact.digits' => 'Contact has to be :min digits long',
                'u_contact'=>'Contact should be numeric only',
                'u_address'=>'Address is required',
                'u_area'=>'Area is required',
                'u_city'=>'City is required',
                'u_city.alpha'=>'City should be alphabetic name only',
                'u_state'=>'State is required',
                'u_state.alpha'=>'State should be alphabetic name only',
                'u_occupation'=>'Occupation is required',
                'u_occupation.alpha'=>'Occupation should be alphabetic name only'
            ]);

            
        $user = new User();
        $user->userName = $validatedData['u_name'];
        $user->userEmail = $validatedData['u_email'];
        $user->userPassword = bcrypt($validatedData['u_password']);
        $user->userContactNo = $validatedData['u_contact'];
        $user->userAddress = $validatedData['u_address'];
        $user->userArea = $validatedData['u_area'];
        $user->userCity = $validatedData['u_city'];
        $user->userState = $validatedData['u_state'];
        $user->userOccupation = $validatedData['u_occupation'];
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