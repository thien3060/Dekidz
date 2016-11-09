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
            $table->boolean('month_off')->nullable();
            $table->boolean('is_sat')->nullable();
            $table->boolean('is_sun')->nullable();
            $table->integer('work_day')->nullable();
            $table->integer('off_day')->nullable();
            $table->integer('total_sat_work')->nullable();
            $table->integer('total_sat_off')->nullable();
            $table->integer('total_sun_work')->nullable();
            $table->integer('total_sun_off')->nullable();
            $table->date('day')->nullable();
            $table->text('track')->nullable();
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
