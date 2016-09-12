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
            $table->text('preparing_description');
            $table->text('cooking_description');
            $table->string('chef');
            $table->float('protid_dv');
            $table->float('protid_tv');
            $table->float('lipid_dv');
            $table->float('lipid_tv');
            $table->float('glucid');
            $table->float('calo');
            $table->float('canxi');
            $table->float('photpho');
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
        Schema::drop('dishes');
    }
}
