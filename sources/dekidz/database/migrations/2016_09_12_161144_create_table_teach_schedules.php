<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTeachSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teach_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day');
            $table->date('date');
            $table->integer('class_id');
            $table->integer('morning_lesson_id');
            $table->integer('morning_teacher_id');
            $table->integer('afternoon_lesson_id');
            $table->integer('afternoon_teacher_id');
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
        Schema::drop('teach_schedules');
    }
}
