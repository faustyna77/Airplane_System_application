<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
class BookingController extends Controller
{
    //

    public function index()
    {
        $bookings=Booking::All();
        return view('bookings.index',compact('bookings'));

    }


    public function store(Request $request,Booking $booking)
    {
        $booking->passenger_id=$request->passenger_id;
        $booking->adres_id=$request->adres_id;
        $booking->flight_id=$request->flight_id;
        $booking->status_reservation_id=$request->status_reservation_id;
        $booking->baggage=$request->baggage;
        $booking->place=$request->place;
        $booking->save();
        return redirect()->route('booking.index');
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function update(Request $request,Booking $booking)
    {
        $booking->passenger_id=$request->passenger_id;
        $booking->adres_id=$request->adres_id;
        $booking->flight_id=$request->flight_id;
        $booking->status_reservation_id=$request->status_reservation_id;
        $booking->baggage=$request->baggage;
        $booking->place=$request->place;
        $booking->save();
        return redirect()->route('booking.index');
    }


    public function destroy(Booking $booking)
    {

        $booking->delete();
        return redirect()->route('booking.index');
    }

    public function edit(Booking $booking)
    {
        return view('bookings.edit',['booking'=>$booking]);
    }



}
