<?php

namespace App\Http\Controllers;

use App\Model\Flight_list;
use App\Model\Login;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class FlightListController extends Controller {

    public function index() {
        $flights = Flight_list::get()->where('id','=','1');
        return view('/flight-list',['flights' => $flights,'a'=>$a]);
    }
    
    public function searchFlights(Request $data){
         $keyname = $data->get('from');
         $infor = $data->all(); // lay gia tri cho loai khach, va so luong hk

         $flights = DB::table('flight_list')->where('city_id',$keyname)->get(); 

		 return view('flight-list',['flights'=>$flights],['infor'=>(array)$infor]);
    }

    public function postDetail($id){

        $detail = DB::table('airways') // Use left join to take id 2 table and get data
            ->leftJoin('flight_list', 'flight_list.airways_id','=', 'airways.id')
            ->select('flight_list.*','airways.airways_name')->where('flight_list.id',$id)->get();
            
        return view('flight-detail',['detail'=>(array)$detail]);
    }


}
