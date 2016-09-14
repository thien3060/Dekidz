<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhysicalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_info', function (Blueprint $table) {
            $table->increments('id', true);
            $table->int('student_id');
            $table->string('gender');
            $table->integer('months');
            $table->float('height');
            $table->float('weight');
            $table->float('BMI');
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
        Schema::drop('physical_info');
    }
}
