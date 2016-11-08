<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStandardIndexes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standard_indexes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('age')->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->float('bmi')->nullable();
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
        Schema::drop('standard_indexes');
    }
}
