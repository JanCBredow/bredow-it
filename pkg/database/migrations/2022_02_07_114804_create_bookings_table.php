<?php

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\CheckIn;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Appointment::class)->constrained()->cascadeOnUpdate();
            $table->foreignIdFor(Patient::class)->constrained()->cascadeOnUpdate();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnUpdate();
            $table->foreignIdFor(Service::class)->nullable()->constrained()->cascadeOnUpdate();
            $table->text('qr_code')->nullable();
            $table->text('qr_code_id')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
