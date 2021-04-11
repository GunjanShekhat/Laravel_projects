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

    public function searchResult(Request $request){
        if($request->ajax()) {
            $user = User::where('userName','LIKE','%'.$request->searchKey.'%')->orWhere('userEmail','LIKE','%'.$request->searchKey.'%')->get();
            $output = '';
            if(count($user) > 0){
                foreach ($user as $user) {
                    $output .= '
                    <tr>
                            <td>'.$user->userId.'</td>
                            <td>'.$user->userName.'</td>
                            <td>'.$user->userEmail.'</td>
                            <td>'.$user->userOccupation.'</td>
                            <td>'.$user->userContactNo.'</td>
                        </tr>';
                }
            }
            else{
                $output = '';
            } 
            echo $output;
                
        }
    }
}