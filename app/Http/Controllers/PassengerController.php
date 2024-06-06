<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Passenger;

use Illuminate\Support\Facades\DB;
class PassengerController extends Controller
{
    //


    public function index()
    {
       $passengers=Passenger::All();
        return view("passengers.index",compact('passengers'));
        //return view("passengers.index")->with('passengers',Passenger::all());
    }


   

    // Metoda destroy() do usuwania pasażerów
    public function destroy(Passenger $passenger)
    {
        $passenger->delete();
        return redirect()->route('passengers.index');
    }

    public function create()
    {
        return view('passengers.create');
    }

    public function edit(Passenger $passenger)
    {
        return view('passengers.edit',['passenger'=>$passenger]);
    }
   

    public function update(Passenger $passenger,Request $request)
    {
        $passenger->name=$request->name;
        $passenger->surname=$request->surname;
        $passenger->pesel_number=$request->pesel_number;
        $passenger->phone=$request->phone;
        $passenger->email=$request->email;
        $passenger->save();
        return redirect()->route('passengers.index');
    }
    

    public function search(Request $request)
    {
        $province = $request->input('province');
        
        // Wywołanie funkcji PostgreSQL
        $passengers = DB::select('SELECT * FROM SearchPassengersByProvince(?)', [$province]);

        return view('passengers.search', [
            'passengers' => $passengers,
            'province' => $province
        ]);
    }
    
    public function store(Request $request,Passenger $passenger)
    {

      
        $passenger->name=$request->name;
        $passenger->surname=$request->surname;
        $passenger->pesel_number=$request->pesel_number;
        $passenger->phone=$request->phone;
        $passenger->email=$request->email;
        $passenger->adres_id=$request->adres_id;
        $passenger->save();
       
        return redirect()->route('passengers.index');
    }

    public function getPassengersByProvince(Request $request)
{
    // Pobierz wartość parametru 'province' z zapytania HTTP
    $province = $request->input('province');
        
    // Wywołaj funkcję z bazy danych i pobierz wynik
    $passengers = DB::select("SELECT * FROM get_passengers_by_province(:province)", ['province' => $province]);

    return view('passengers.by_province', ['passengers' => $passengers]);
}
   
public function searchByPesel(Request $request)
{
    $pesel = $request->input('pesel');
    
    // Wywołanie funkcji PostgreSQL
    $passengers = DB::select('SELECT * FROM FindPassengerByPesel(?)', [$pesel]);

    return view('passengers.search_by_pesel', [
        'passengers' => $passengers,
        'pesel' => $pesel
    ]);
}
public function getPassengerDetailsByFlight(Request $request)
    {
        $flightId = $request->input('flight_id');
        $passengers = [];

        if ($flightId) {
            $passengers = Passenger::join('bookings', 'passengers.passenger_id', '=', 'bookings.passenger_id')
                ->join('adres', 'passengers.adres_id', '=', 'adres.adres_id')
                ->where('bookings.flight_id', $flightId)
                ->select('passengers.*', 'adres.*')
                ->get();
        }

        return view('passengers.passenger_details_by_flight', [
            'passengers' => $passengers,
            'flightId' => $flightId
        ]);
    }

    public function getPassengersByBaggage(Request $request)
    {
        $baggageCount = $request->input('baggage_count');
        $passengers = [];

        if ($baggageCount !== null) {
            $passengers = DB::select('SELECT * FROM get_passengers_by_baggage_count(?)', [$baggageCount]);
        }

        return view('passengers.by_baggage', [
            'passengers' => $passengers,
            'baggageCount' => $baggageCount
        ]);
    }
    public function searchBySeatNumber(Request $request)
    {
        $seat_number = $request->input('seat_number');

        $passengers = DB::select('SELECT * FROM get_passenger_by_seat_number(?)', [$seat_number]);

        return view('passengers.passengers_by_seat', ['passengers' => $passengers, 'seat_number' => $seat_number]);
    }
public function updateSurname(Request $request)
    {
        $passengerId = $request->input('passenger_id');
        $newSurname = $request->input('new_surname');

        DB::statement('CALL update_passenger_surname(?, ?)', [$passengerId, $newSurname]);

        return back()->with('success', 'Passenger surname updated successfully');
    }

    public function getPassengersByFlight(Request $request)
    {
        $flightId = $request->input('flight_id');

        // Sprawdzenie, czy flight_id nie jest null
        if (is_null($flightId)) {
            return redirect()->back()->with('error', 'Flight ID is required');
        }

        $passengers = DB::select('SELECT * FROM get_passengers_and_addresses_by_flight(?)', [$flightId]);

        return view('passengers.passengers_by_flight', compact('passengers', 'flightId'));
    }
/*
public function store(Request $request)
{
    $input = $request->all();
    Passenger::create($input);

    return redirect()->route('passengers.index');
}*/
}
