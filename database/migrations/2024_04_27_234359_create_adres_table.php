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
        Schema::create('adres', function (Blueprint $table) {
            $table->bigIncrements('adres_id');
            $table->string('wojewodztwo', 45);
            $table->string('powiat', 45);
            $table->string('miejscowosc', 45);
            $table->string('ulica', 45);
            $table->string('numer_domu', 45);
            $table->string('numer_lokalu', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adres');
    }
};
