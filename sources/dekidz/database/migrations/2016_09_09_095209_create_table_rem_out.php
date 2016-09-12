<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRemOut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rem_out', function (Blueprint $table) {
            $table->increments('id');
            $table->string('out_code', 10);
            $table->date('out_date');
            $table->text('out_reason');
            $table->float('out_total');
            $table->float('out_paid');
            $table->float('out_debt');
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
        Schema::drop('rem_out');
    }
}
