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
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('identity_card')->nullable();
            $table->string('religion')->nullable();
            $table->string('address')->nullable();
            $table->integer('department_id')->nullable();
            $table->string('issued_by')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('position')->nullable();
            $table->string('degree')->nullable();
            $table->string('picture')->nullable();
            $table->boolean('is_leaguer')->nullable();
            $table->string('working_status')->nullable();
            $table->date('start_day')->nullable();
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
