<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dob');
            $table->string('name');
            $table->text('address');
            $table->string('nation');
            $table->string('religion')->nullable();
            $table->string('father_name');
            $table->date('father_dob');
            $table->string('father_job');
            $table->string('father_phone');
            $table->string('mother_name');
            $table->date('mother_dob');
            $table->string('mother_job');
            $table->string('mother_phone');
            $table->string('picture');
            $table->string('admission_date');
            $table->string('completion_date');
            $table->text('note')->nullable();
            $table->string('entry_card',15);
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
        Schema::drop('students');
    }
}
