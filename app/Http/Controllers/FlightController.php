<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flight;
use Illuminate\Support\Facades\DB;


class FlightController extends Controller
{
    //


    public function index()
    {
        $flights=Flight::All();
        return view('flights.index',compact('flights'));
    }


    public function store(Flight $flight,Request $request)
    {
        $flight->departure_date=$request->departure_date;
        $flight->airplane_id=$request->airplane_id;
        $flight->save();
        return redirect()->route('flights.index');
    }


   

    public function create()
    {
        return view('flights.create');
    }

    public function update(Request $request,Flight $flight)
    {
        $flight->departure_date=$request->departure_date;
        $flight->airplane_id=$request->airplane_id;
        $flight->save();
        return redirect()->route('flights.index');
    }


    public function destroy(Flight $flight)

    {
        $flight->delete();
        return redirect()->route('flights.index');


    }

    public function edit(Flight $flight)
    {
        return view('flights.edit',['flight'=>$flight]);
    }

    


    public function searchByDate(Request $request)
    {
        $date = $request->input('date');
        
        // Używając modelu Flight
        $flights = Flight::whereDate('departure_date', $date)->get();
        
        return view('flights.flights_by_date', ['flights' => $flights, 'date' => $date]);
    }
}
