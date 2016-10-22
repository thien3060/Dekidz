<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFoods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('food_group_id');
            $table->string('name');
            $table->boolean('animal_source');
            $table->double('quantity', 10, 2);
            $table->string('unit', 15);
            $table->double('price', 20, 2);
            $table->float('absorb');
            $table->float('digest');
            $table->float('calo');
            $table->float('h2o');
            $table->float('protid');
            $table->float('lipid');
            $table->float('glucid');
            $table->float('cellulose');
            $table->float('cholesterol');
            $table->float('calci');
            $table->float('photpho');
            $table->float('iron');
            $table->float('vitamin_caroten');
            $table->float('vitamina');
            $table->float('vitaminb1');
            $table->float('vitaminb2');
            $table->float('vitaminpp');
            $table->float('vitaminc');
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
        Schema::drop('foods');
    }
}
