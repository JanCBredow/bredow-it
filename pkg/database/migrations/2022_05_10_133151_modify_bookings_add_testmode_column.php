<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyBookingsAddTestmodeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('cwa')->nullable();
        });
        Schema::table('covid_tests', function (Blueprint $table) {
            $table->string('cwa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('cwa');
        });
        Schema::table('covid_tests', function (Blueprint $table) {
            $table->dropColumn('cwa');
        });
    }
}
