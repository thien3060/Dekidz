<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRemIn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rem_in', function (Blueprint $table) {
            $table->increments('id');
            $table->string('in_code',10);
            $table->date('in_date');
            $table->text('in_reason');
            $table->float('in_total');
            $table->float('in_received');
            $table->float('in_dept');
            $table->text('in_note');
            $table->boolean('in_status');
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
        Schema::drop('rem_in');
    }
}
