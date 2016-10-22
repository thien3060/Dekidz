<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFoodSets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id');
            $table->integer('age');
            $table->integer('quantity');
            $table->string('name');
            $table->text('description');
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
            $table->double('total_cost', 20, 2);
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
        Schema::drop('food_sets');
    }
}
