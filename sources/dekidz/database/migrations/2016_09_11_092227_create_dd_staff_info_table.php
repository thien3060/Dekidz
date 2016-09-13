<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDdStaffInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sm_staffs', function (Blueprint $table) {
            $table->increments('id',true);
            $table->string('number');
            $table->string('name');
            $table->string('gender');
            $table->date('dob');
            $table->string('indentity_card');
            $table->string('religion');
            $table->string('address');
            $table->string('departement_id');
            $table->boolean('is_teacher');
            $table->string('issued_by');
            $table->date('date_range');
            $table->string('phone');
            $table->string('email');
            $table->string('position');
            $table->string('degree');
            $table->string('father_name');
            $table->date('father_dob');
            $table->string('father_job');
            $table->string('mother_name');
            $table->date('mother_dob');
            $table->string('mother_job');
            $table->string('mother_phone');
            $table->string('father_phone');
            $table->string('picture');
            $table->boolean('is_leagurer');
            $table->string('working_status');
            $table->date('start_day');
            $table->string('type_of_contract');
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
        //
    }
}
