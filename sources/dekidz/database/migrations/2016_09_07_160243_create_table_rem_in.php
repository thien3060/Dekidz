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
            $table->string('code',10);
            $table->date('date');
            $table->text('reason');
            $table->double('total', 20, 2);
            $table->double('received', 20, 2);
            $table->double('debt', 20, 2);
            $table->text('note')->nullable();
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
        Schema::drop('rem_in');
    }
}
