<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\houseDetail;
use App\Models\contractDetail;
use PDF;
use DateTime;

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

    public function bookedHouses(){
        if (session()->has('user_email')) {
            $house = contractDetail::where('userIdForeign',session()->get('user_id'))->orderBy('contractId','DESC')->get();
            return view('User/bookedHouses',compact('house'));
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

    public function newHouse(Request $request){
        $house = new houseDetail();
        $house->houseName = $request->houseName;
        $house->houseRentPerMonth = $request->rentPerMonth;
        $house->houseRentPerDay = $request->rentPerDay;
        $house->totalBedrooms = $request->totalBedroom;
        $house->totalBathrooms = $request->totalBathroom;
        $house->houseArea = $request->houseArea;
        $house->houseCity = $request->houseCity;
        $house->houseState = $request->houseState;
        $house->houseStatus = 1;
        $house->userIdForeign = session()->get('user_id');
        $house->save();
        return back()->with('house_added','House has been added Successfully! & will be visible to buyers very soon!! ');
    }

    public function singleHouse(){
        $house = houseDetail::where('houseId',$_GET['id'])->get();
        return view('User/singleHouse',compact('house'));
    }

    public function bookHouse(Request $req){
        $datetime1 = new DateTime($req->arrival);
        $datetime2 = new DateTime($req->departure);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        $houseRent = houseDetail::where('houseId',$req->id)->first()->get();
        foreach($houseRent as $houseRent){
            $totalRent = $days * $houseRent->houseRentPerDay;
        }
        $contract = new contractDetail();
        $contract->houseIdForeign = $req->id;
        $contract->userIdForeign = session()->get('user_id');
        $contract->startOfContract = $req->arrival;
        $contract->endOfContract = $req->departure;
        $contract->duration = $days;
        $contract->totalRent = $totalRent;
        $contract->save();
        return back()->with('booked','booked successfully!!!');
        
    }

    public function deleteHouse(){
        houseDetail::where('houseId',$_GET['id'])->delete();
        return back()->with('house_deleted','House Deleted Successfully ');
    }

    public function editHouse(){
        $house = houseDetail::where('houseId',$_GET['id'])->get();
        return view('User/editHouseDetail',compact('house'));
    }

    public function updateHouse(Request $request){
        houseDetail::where('houseId', $request->id)->update(['houseName' => $request->houseName,'houseRentPerMonth'=>$request->rentPerMonth, 'houseRentPerDay' => $request->rentPerDay, 'totalBedrooms' => $request->totalBedroom, 'totalBathrooms' => $request->totalBathroom, 'houseArea' => $request->houseArea, 'houseCity' => $request->houseCity, 'houseState' => $request->houseState]);
        return back()->with('house_updated','House Updated Successfully ');
    }

    function allHouses(){
        $houses = houseDetail::all();
        return view('Admin\houses',compact('houses'));
    }

    function downloadPDF(){
        $houses = houseDetail::all();
        $pdf = PDF::loadView('Admin\housesPDF',compact('houses'));
        return $pdf->download('houses.pdf');
    }

    function latestHousesPDF(){
        $houses = houseDetail::orderBy('houseId','DESC')->take(30)->get();
        $pdf = PDF::loadView('Admin\housesPDF',compact('houses'));
        return $pdf->download('houses.pdf');
    }
}