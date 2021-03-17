<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\houseDetail;

class HouseDetailController extends Controller
{
    public function getMyHouse(){
        if (session()->has('user_email')) {
            $house = houseDetail::where('userIdForeign',session()->get('user_id'))->orderBy('houseId','DESC')->get();
            return view('User/myHouse',compact('house'));
        }
        else{
            return redirect('/login');
        }
    }

    public function getHouses(){
        $house = houseDetail::orderBy('houseId','DESC')->get();
        $cheapHouse = houseDetail::orderBy('houseRentPerMonth')->get();
        return view('User/browseHouse',compact('house','cheapHouse'));
    }
}