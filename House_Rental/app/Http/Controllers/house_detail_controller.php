<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\house_detail;

class house_detail_controller extends Controller
{
    //
    public function addHouseDetail(){
        return view('addHouseDetail');
    }

    

    public function editHouseDetail(Request $request){
        house_detail::where('house_id', $request->id)->update(['house_name' => $request->houseName,'address' => $request->address, 'city' => $request->city, 'state' => $request->state, 'rent_per_month' => $request->rent]);
        return redirect('addHouseDetail');
    }

    public function createHouse(Request $request){
        $house = new house_detail();
        $house->house_name = $request->houseName;
        $house->address = $request->address;
        $house->city = $request->city;
        $house->state = $request->state;
        $house->rent_per_month = $request->rent;
        $house->seller_id_foreign = 1;
        $house->save();
        return back()->with('house_added','House has been added Successfully! & will be visible to buyers very soon!! ');
    }

    public function editHouse($id){
        $house = house_detail::where('house_id',$id)->first();
        return view('editHouseDetail',compact('house'));
    }

    public function deleteHouse($id){
        house_detail::where('house_id',$id)->delete();
        return redirect('browseHouse');
    }

    public function getHouse(Request $request){
        $house = house_detail::orderBy('house_id','DESC')->get();
        return view('browseHouse',compact('house'));
    }

    public function getMyHouse(Request $request){
        $house = house_detail::where('seller_id_foreign',1)->orderBy('house_id','DESC')->get();
        return view('myHouse',compact('house'));
    }
}