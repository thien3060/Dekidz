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
            $table->integer('student_id');
            $table->string('gender');
            $table->integer('age');
            $table->float('height');
            $table->float('weight');
            $table->float('BMI');
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
