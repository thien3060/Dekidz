<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStaffs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->string('gender');
            $table->date('dob');
            $table->string('identity_card');
            $table->string('religion')->nullable();
            $table->string('address');
            $table->integer('department_id');
            $table->string('issued_by')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('position');
            $table->string('degree')->nullable();
            $table->string('picture')->nullable();
            $table->boolean('is_leaguer')->nullable();
            $table->string('working_status')->nullable();
            $table->date('start_day');
            $table->string('type_of_contract')->nullable();
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
        Schema::drop('staffs');
    }
}
