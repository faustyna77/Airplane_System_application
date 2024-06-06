<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AirFlightController extends Controller
{
    //
    public function getDataFlightById(Request $request)
    {
        $id_airplaneflight=$request->input('id_airplaneflight');
        $departure_date=DB::select("SELECT get_data_flight_by_id(:id_airplaneflight)",['id_airplaneflight'=>$id_airplaneflight]);
        return view('airflights.departure',['departure_date'=>$departure_date[0]->get_data_flight_by_id,'id_airplaneflight'=>$id_airplaneflight]);


    }
}
