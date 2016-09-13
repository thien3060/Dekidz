<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDdClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gm_classes', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('name');
            $table->integer('teacher_id');
            $table->string('room_number');
            $table->integer('grade_id');
            $table->string('accountability');
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
