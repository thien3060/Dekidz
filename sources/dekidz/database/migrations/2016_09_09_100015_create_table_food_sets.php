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
            $table->float('cal');
            $table->float('cal_needed');
            $table->float('protid');
            $table->float('protid_needed');
            $table->float('lipid');
            $table->float('lipid_needed');
            $table->float('glucid');
            $table->float('glucid_needed');
            $table->float('plg_proportion');
            $table->float('plg_proportion_needed');
            $table->float('cal_proportion');
            $table->float('protid_proportion');
            $table->float('lipid_proportion');
            $table->float('glucid_proportion');
            $table->float('protid_dv');
            $table->float('protid_tv');
            $table->float('lipid_dv');
            $table->float('lipid_tv');
            $table->float('total_cost');
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
        Schema::drop('food_sets');
    }
}
