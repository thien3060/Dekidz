<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSalary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_id');
            $table->double('base_salary',20, 2);
            $table->float('wage_index');
            $table->double('bonus',20, 2);
            $table->double('minus',20, 2);
            $table->double('salary',20, 2);
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
        Schema::drop('salary');
    }
}
