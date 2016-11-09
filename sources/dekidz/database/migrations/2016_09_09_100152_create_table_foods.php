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
            $table->float('absorb')->nullable();
            $table->float('digest')->nullable();
            $table->float('calo')->nullable();
            $table->float('h2o')->nullable();
            $table->float('protid')->nullable();
            $table->float('lipid')->nullable();
            $table->float('glucid')->nullable();
            $table->float('cellulose')->nullable();
            $table->float('cholesterol')->nullable();
            $table->float('calci')->nullable();
            $table->float('photpho')->nullable();
            $table->float('iron')->nullable();
            $table->float('vitamin_caroten')->nullable();
            $table->float('vitamina')->nullable();
            $table->float('vitaminb1')->nullable();
            $table->float('vitaminb2')->nullable();
            $table->float('vitaminpp')->nullable();
            $table->float('vitaminc')->nullable();
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
