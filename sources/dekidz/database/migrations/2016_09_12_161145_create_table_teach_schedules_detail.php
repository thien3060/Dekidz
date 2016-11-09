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
            $table->integer('teach_schedule_id');
            $table->integer('day');
            $table->integer('period');
            $table->integer('lesson');
            $table->integer('teacher');
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
