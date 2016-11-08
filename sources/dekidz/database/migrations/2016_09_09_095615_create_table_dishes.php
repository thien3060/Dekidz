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
            $table->integer('type_id')->nullable();
            $table->string('name');
            $table->double('total_cost', 20, 2)->nullable();
            $table->text('preparing_description')->nullable();
            $table->text('cooking_description')->nullable();
            $table->string('chef')->nullable();
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
        Schema::drop('dishes');
    }
}
