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
            $table->date('dob')->nullable();
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->string('nation')->nullable();
            $table->string('religion')->nullable();
            $table->string('father_name')->nullable();
            $table->date('father_dob')->nullable();
            $table->string('father_job')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('mother_dob')->nullable();
            $table->string('mother_job')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('picture')->nullable();
            $table->string('admission_date')->nullable();
            $table->string('completion_date')->nullable();
            $table->text('note')->nullable();
            $table->string('entry_card',15)->nullable();
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
