<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCvoidTestsAddCwaMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('covid_tests', function (Blueprint $table) {
            $table->json('cwaProfile')->nullable();
            $table->string('cwaHash')->nullable();
            $table->text('cwaLink')->nullable();
            $table->text('cwaQrCode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('covid_tests', function (Blueprint $table) {
            $table->dropColumn('cwaProfile');
            $table->dropColumn('cwaHash');
            $table->dropColumn('cwaLink');
            $table->dropColumn('cwaQrCode');
        });
    }
}
