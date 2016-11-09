<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTuitionFee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuition_fee', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->double('debt', 18, 2);
            $table->double('paid', 18, 2);
            $table->integer('year');
            $table->integer('month');
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
        Schema::drop('tuition_fee');
    }
}
