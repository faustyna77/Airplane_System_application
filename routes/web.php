<?php

use App\Http\Controllers\AdresController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\AirplaneController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StatusReservationController;
use App\Http\Controllers\AirFlightController;
use App\Models\Booking;
use App\Models\StatusReservation;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/adres/{adres}/edit', [AdresController::class, 'edit'])->name('adres.edit');

//Route::delete('/passengers/{passengers}',[PassengerController::class,'destroy'])->name('passenger.destroy');
Route::get('/adres', [AdresController::class, 'index'])->name('adres.index');
Route::get('/adres/create', [AdresController::class, 'create'])->name('adres.create');
Route::post('/adres', [AdresController::class, 'store'])->name('adres.store');
Route::put('/adres/{adres}/edit', [AdresController::class, 'edit'])->name('adres.edit');
Route::put('/adres/{adres}', [AdresController::class, 'update'])->name('adres.update');
Route::delete('/adres/{adres}', [AdresController::class, 'destroy'])->name('adres.destroy');

Route::post('/adres/{adres}',[AdresController::class, 'update'])->name('adres.update');
//Route::put('/adres/{adres}', [AdresController::class, 'update'])->name('adres.update');
Route::get('/passengers',[PassengerController::class,'index'])->name('passengers.index');

Route::get('/passengers/create',[PassengerController::class,'create'])->name('passenger.create');

Route::post('/passengers',[PassengerController::class,'store'])->name('passenger.store');

Route::post('/airplanes',[AirplaneController::class,'store'])->name('airplane.store');
Route::get('/airplanes',[AirplaneController::class,'index'])->name('airplane.index');


Route::delete('/airplanes/{airplane}',[AirplaneController::class,'destroy'])->name('airplane.destroy');

Route::put('/passengers/{passenger}',[PassengerController::class,'update'])->name('passenger.update');
Route::delete('/passengers/{passenger}', [PassengerController::class, 'destroy'])->name('passenger.destroy');

Route::get('/passengers/{passenger}/edit',[PassengerController::class,'edit'])->name('passenger.edit');

Route::get('/airplanes',[AirplaneController::class,'index'])->name('airplanes.index');

Route::get('/flights',[FlightController:: class,'index'])->name('flight.index');
Route::get('/flights',[FlightController:: class,'index'])->name('flights.index');
Route::post('/flights',[FlightController::class, 'store'])->name('flight.store');

Route::get('/airplanes/create',[AirplaneController::class,'create'])->name('airplane.create');

Route::post('/airplanes',[AirplaneController::class,'store'])->name('airplane.store');

Route::get('/airplanes/{airplane}/edit',[AirplaneController::class,'edit'])->name('airplane.edit');
Route::put('/airplanes/{airplane}',[AirplaneController::class,'update'])->name('airplane.update');
Route::get('/flights/create',[FlightController::class,'create'])->name('flight.create');
Route::get('/flights/{flight}/edit',[FlightController::class,'edit'])->name('flight.edit');
Route::put('/flights/{flight}',[FlightController::class,'update'])->name('flight.update');
Route::delete('/flights/{flight}',[FlightController::class,'destroy'])->name('flight.destroy');

Route::get('/status_reservations',[StatusReservationController::class,'index'])->name('status_reservation.index');
Route::get('/status_reservation/create',[StatusReservationController::class,'create'])->name('status_reservation.create');
Route::post('/status_reservations',[StatusReservationController::class,'store'])->name('status_reservation.store');
Route::delete('/status_reservations/{status_reservation}',[StatusReservationController::class,'destroy'])->name('status_reservation.destroy');
Route::put('/status_reservations/{status_reservation}',[StatusReservationController::class,'update'])->name('status_reservation.update');
Route::get('/status_reservations/{status_reservation}/edit',[StatusReservationController::class,'edit'])->name('status_reservation.edit');
Route::get('/reservations',[ReservationController::class,'index'])->name('reservation.index');
Route::delete('/reservations/{reservation}',[ReservationController::class,'destroy'])->name('reservation.destroy');
Route::put('/reservations/{reservation}',[ReservationController::class,'update'])->name('reservation.update');
Route::get('/reservations/{reservation}/edit',[ReservationController::class,'edit'])->name('reservation.edit');
Route::get('/reservations/create',[ReservationController::class,'create'])->name('reservation.create');
Route::post('/reservations',[ReservationController::class,'store'])->name('reservation.store');

////////////
Route::get('/passenger-details-by-flight', [PassengerController::class, 'getPassengerDetailsByFlight'])->name('passengers.details.by.flight');
Route::get('/passengers/by-baggage', [PassengerController::class, 'getPassengersByBaggage'])->name('passengers.by.baggage');


Route::get('passengers/passengers-by-flight', [PassengerController::class, 'getPassengersByFlight'])->name('passengers.passengers.by.flight');

Route::get('/passengers/search', [PassengerController::class, 'search'])->name('passengers.search');
Route::post('/passengers/update-surname', [PassengerController::class, 'updateSurname'])->name('passenger.updateSurname');
Route::get('/passengers/update-surname', function () {
    return view('passengers.update-surname');
});
Route::get('/passengers/search_by_seat', [PassengerController::class, 'searchBySeatNumber'])->name('passengers.searchBySeatNumber');
//Route::get('/passengers/searchBySeatNumber', [PassengerController::class, 'searchBySeatNumber'])->name('passengers.searchBySeatNumber');
//Route::get('/flights/flights_by_year', [FlightController::class, 'searchByYear'])->name('flights.flights_by_year');
Route::get('/flights/flights_by_date', [FlightController::class, 'searchByDate'])->name('flights.flights_by_date');

Route::get('/passengers/search-by-pesel', [PassengerController::class, 'searchByPesel'])->name('passengers.searchByPesel');
///////////////////////

Route::get('/bookings',[BookingController::class,'index'])->name('booking.index');
Route::get('/bookings/create',[BookingController::class,'create'])->name('booking.create');
Route::post('/bookings',[BookingController::class,'store'])->name('booking.store');
Route::delete('/bookings/{booking}',[BookingController::class,'destroy'])->name('booking.destroy');
Route::get('/bookings/{booking}/edit',[BookingController::class,'edit'])->name('booking.edit');
Route::put('/bookings/{booking}',[BookingController::class,'update'])->name('booking.update');

//Route::post('/create', [AdresController::class, 'store'])->name('adres.store');




Route::get('/addresses', [AdresController::class, 'getAllAddresses']);
Route::view('/airplane/search', 'airplanes.search');
Route::view('/passengers/province','passengers.province');
Route::get('/passengers/by_province',[PassengerController::class,'getPassengersByProvince'])->name('passengers.by_province');
Route::get('/airplane/producer', [AirPlaneController::class, 'getProducerByType'])->name('airplane.producer');
Route::view('/airflights/search','airflights.search');
Route::get('/airflights/departure',[AirFlightController::class,'getDataFlightById'])->name('airflights.departure');