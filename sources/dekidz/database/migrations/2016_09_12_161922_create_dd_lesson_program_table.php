<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDdLessonProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_lesson_program', function (Blueprint $table) {
            $table->increments('subject_topic_id', true);
            $table->integer('lesson_id');
            $table->string('lesson_name');
            $table->text('lesson_goal');
            $table->text('teach_activity');
            $table->text('kid_activity');
            $table->string('author');
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
