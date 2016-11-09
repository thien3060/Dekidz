<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDishDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dish_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dish_id');
            $table->integer('food_id');
            $table->double('quantity', 10, 2);
            $table->double('price', 20, 2);
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
        Schema::drop('dish_detail');
    }
}
