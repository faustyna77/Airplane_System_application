<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StatusReservation;

class StatusReservationController extends Controller
{
    //

    public function index()
    {
        $statusReservations=StatusReservation::All();
        return view('status_reservations.index',compact('statusReservations'));


    }


    
    public function create()
    {
        return view('status_reservations.create');
    }


    public function store(Request $request,StatusReservation $statusReservation)
    {
        $statusReservation->reservation_state=$request->reservation_state;
        $statusReservation->save();
        return redirect()->route('status_reservation.index');
    }



    public function destroy(StatusReservation $statusReservation)
    {
        $statusReservation->delete();
        return redirect()->route('status_reservation.index');

    }


    public function edit(StatusReservation $statusReservation)
    {

        return view ('status_reservations.edit',['statusReservation'=>$statusReservation]);
    }
    

    public function update(Request $request,StatusReservation $statusReservation)
    {
        $statusReservation->reservation_state=$request->reservation_state;
        $statusReservation->save();
        return redirect()->route('status_reservation.index');
    }
}
