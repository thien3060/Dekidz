<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDdFoodRepositoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fm_food_repository', function (Blueprint $table) {
            $table->increments('id', true);
            $table->date('input_date');
            $table->string('unit');
            $table->integer('quantity');
            $table->float('cost');
            $table->text('supplier');
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
        //
    }
}
