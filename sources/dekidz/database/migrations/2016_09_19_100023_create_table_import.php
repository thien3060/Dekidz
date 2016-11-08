<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->integer('supplier')->nullable();
            $table->double('total_cost', 18, 2)->nullable();
            $table->boolean('is_food')->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::drop('import');
    }
}
