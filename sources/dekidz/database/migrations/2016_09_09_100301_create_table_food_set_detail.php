<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFoodSetDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_set_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('food_set_id')->nullable();
            $table->integer('dish_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->double('price', 20, 2)->nullable();
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
        Schema::drop('food_set_detail');
    }
}
