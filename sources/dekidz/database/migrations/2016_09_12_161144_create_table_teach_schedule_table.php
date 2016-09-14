<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTeachScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teach_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day');
            $table->date('date');
            $table->integer('morning_lesson_id');
            $table->integer('morning_teacher_id');
            $table->interger('afternoon_lesson_id');
            $table->interger('afternoon_teacher_id');
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
        Schema::drop('teach_schedule');
    }
}
