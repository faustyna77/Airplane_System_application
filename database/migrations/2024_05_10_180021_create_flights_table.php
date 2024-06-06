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
        Schema::create('flights', function (Blueprint $table) {
            $table->bigIncrements('flight_id');

            $table->dateTime('departure_date');
            $table->bigInteger('airplane_id');
            $table->foreign('airplane_id')->references('airplane_id')->on('airplanes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
/*<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('airplanes', function (Blueprint $table) {
            $table->id('ID_airplane');
            $table->string('producer',45);
            $table->string('type',45);

            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('airplanes');
    }
};

*/