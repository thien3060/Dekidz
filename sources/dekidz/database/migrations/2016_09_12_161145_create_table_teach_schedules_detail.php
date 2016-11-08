<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTeachSchedulesDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teach_schedules_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teach_schedule_id')->nullable();
            $table->integer('day')->nullable();
            $table->integer('period')->nullable();
            $table->integer('lesson')->nullable();
            $table->integer('teacher')->nullable();
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
        Schema::drop('teach_schedules_detail');
    }
}
