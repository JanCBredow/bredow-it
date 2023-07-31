<?php

use App\Models\TestCenter;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestCenterOpeningHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_center_opening_hours', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TestCenter::class)->constrained()->cascadeOnUpdate();
            $table->enum('day', [
                'MONDAY',
                'TUESDAY',
                'WEDNESDAY',
                'THURSDAY',
                'FRIDAY',
                'SATURDAY',
                'SUNDAY'
            ]);
            $table->integer('capacity')->default(0);
            $table->time('start');
            $table->time('end');
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
        Schema::dropIfExists('test_center_opening_hours');
    }
}
