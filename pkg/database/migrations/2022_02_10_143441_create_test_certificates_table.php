<?php

use App\Models\CovidTest;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CovidTest::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('uuid')->nullable();
            $table->string('storage')->default('local');
            $table->string('path')->nullable();
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
        Schema::dropIfExists('test_certificates');
    }
}
