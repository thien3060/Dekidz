<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('wage_index');
            $table->timestamps();
        });
        Schema::table('staffs', function (Blueprint $table) {
            $table->dropColumn('is_teacher');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('staff_types');
        Schema::table('staffs', function (Blueprint $table) {
            $table->boolean('is_teacher')->after('department_id');
        });
    }
}
