<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStaffTracking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_tracking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_id');
            $table->boolean('month_off');
            $table->boolean('is_sat');
            $table->boolean('is_sun');
            $table->integer('work_day');
            $table->integer('off_day');
            $table->integer('total_sat_work');
            $table->integer('total_sat_off');
            $table->integer('total_sun_work');
            $table->integer('total_sun_off');
            $table->date('day');
            $table->text('track');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('staff_tracking');
    }
}
