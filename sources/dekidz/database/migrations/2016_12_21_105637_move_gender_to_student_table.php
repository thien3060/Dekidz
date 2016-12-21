<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MoveGenderToStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('physical_info', function (Blueprint $table) {
            $table->dropColumn(['gender']);
        });
        Schema::table('students', function (Blueprint $table) {
            $table->boolean('gender')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('physical_info', function (Blueprint $table) {
            $table->boolean('gender')->after('student_id');
        });
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['gender']);
        });
    }
}
