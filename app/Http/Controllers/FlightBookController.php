<?php

namespace App\Http\Controllers;

use App\Model\Login;
use App\Model\Flight_list;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FlightBookController extends Controller {

   public function flightBook($id){
   	
        $book = DB::table('airways') // Use left join to take id 2 table and get data
            ->leftJoin('flight_list', 'flight_list.airways_id','=', 'airways.id')
            ->select('flight_list.*','airways.airways_name')->where('flight_list.id',$id)->get();

        return view('flight-book',['book'=>(array)$book]);
    }
}
