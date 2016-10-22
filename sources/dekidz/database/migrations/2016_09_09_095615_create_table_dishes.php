<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDishes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id');
            $table->string('name');
            $table->double('total_cost', 20, 2);
            $table->text('preparing_description');
            $table->text('cooking_description');
            $table->string('chef');
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
        Schema::drop('dishes');
    }
}
