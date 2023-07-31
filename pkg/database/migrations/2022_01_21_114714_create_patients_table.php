<?php

use App\Models\Booking;
use App\Models\Location;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->string('surename');
            $table->string('street');
            $table->string('plz');
            $table->string('city');
            $table->string('housenr');
            $table->string('persouuid')->nullable();
            $table->string('phone');
            $table->dateTime('birthday');
            $table->string('gender');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
