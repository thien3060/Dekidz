<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNutritionalRequirements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutritional_requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('age');
            $table->float('calo');
            $table->float('protein');
            $table->float('calxi');
            $table->float('iron');
            $table->float('vitamina');
            $table->float('vitaminb1');
            $table->float('vitaminb2');
            $table->float('vitaminpp');
            $table->float('vitaminc');
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
        Schema::drop('nutritional_requirements');
    }
}
