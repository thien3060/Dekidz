<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFoodDeposit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_deposit', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('type', 10);
            $table->string('name');
            $table->date('input_date');
            $table->string('unit', 20);
            $table->integer('quantity');
            $table->float('cost');
            $table->string('supplier');
            $table->date('expired_date');
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
        Schema::drop('food_deposit');
    }
}
