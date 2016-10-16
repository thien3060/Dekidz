<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('departments', function (Blueprint $table) {
            $table->longText('description')->after('name');
            $table->float('wage_index')->after('name');
        });

        Schema::table('food_set_detail', function (Blueprint $table) {
            $table->dropIfExists('from_deposit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('departments', function (Blueprint $table) {
            $table->dropIfExists('description');
            $table->dropIfExists('wage_index');
        });

        Schema::table('food_set_detail', function (Blueprint $table) {
            $table->boolean('from_deposit')->after('price');
        });
    }
}
