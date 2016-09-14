<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLessonProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_program', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_topic_id');
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
        Schema::drop('lesson_program');
    }
}
