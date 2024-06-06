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
        Schema::create('passengers', function (Blueprint $table) {
            
            $table->bigIncrements('passenger_id');
            $table->string('name', 45);
            $table->string('surname', 45);
            $table->string('pesel_number', 45);
            $table->string('phone', 15);
            $table->string('email', 45);
            $table->bigInteger('adres_id');
            $table->foreign('adres_id')->references('adres_id')->on('adres');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passengers');
    }
};
