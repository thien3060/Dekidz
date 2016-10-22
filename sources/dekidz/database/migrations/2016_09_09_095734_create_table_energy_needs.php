<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEnergyNeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_needs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('age');
            $table->float('daily_cal');
            $table->float('school_time_cal');
            $table->float('daily_protid');
            $table->float('school_time_protid');
            $table->float('daily_lipid');
            $table->float('school_time_lipid');
            $table->float('daily_glucid');
            $table->float('school_time_glucid');
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
        Schema::drop('energy_needs');
    }
}
