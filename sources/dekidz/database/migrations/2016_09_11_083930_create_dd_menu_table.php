<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDdMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dd_menu', function (Blueprint $table) {
            $table->increments('id', true);
            $table->date('date');
            $table->integer('breakfast_id');
            $table->integer('lunch_id');
            $table->integer('mid_afternoon_id');
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
