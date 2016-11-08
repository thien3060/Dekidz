<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhysicalInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->nullable();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->float('BMI')->nullable();
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
        Schema::drop('physical_info');
    }
}
