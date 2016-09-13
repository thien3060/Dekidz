<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDdTeachScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_teach_schedule', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('day');
            $table->date('date');
            $table->string('morning_lesson');
            $table->string('morning_teacher');
            $table->string('afternoon_lesson');
            $table->string('afternoon_teacher');
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
        //
    }
}
