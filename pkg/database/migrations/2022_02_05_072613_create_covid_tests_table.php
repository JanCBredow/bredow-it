<?php

use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Patient;
use App\Models\Service;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid_tests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class)->constrained()->cascadeOnUpdate();
            $table->foreignIdFor(Service::class)->constrained()->cascadeOnUpdate();
            $table->foreignIdFor(Appointment::class)->constrained()->cascadeOnUpdate();
            $table->enum('state', [
                'UNKNOWN',
                'POSITIVE',
                'NEGATIVE',
                'INCONCLUDENT'
            ]);
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
        Schema::dropIfExists('covid_tests');
    }
}
