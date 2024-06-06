<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('booking_id');
            $table->bigInteger('passenger_id');
            $table->foreign('passenger_id')->references('passenger_id')->on('passengers');
            $table->bigInteger('adres_id');
            $table->foreign('adres_id')->references('adres_id')->on('adres');
            $table->bigInteger('flight_id');
            $table->foreign('flight_id')->references('flight_id')->on('flights');
            $table->bigInteger('status_reservation_id');
            $table->foreign('status_reservation_id')->references('status_reservation_id')->on('status_reservations');

            $table->string('baggage',45);
            $table->string('place',10);
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
