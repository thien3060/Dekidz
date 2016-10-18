<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImportDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('import_id');
            $table->integer('good_id');
            $table->double('price', 18, 2);
            $table->double('quantity', 10, 2);
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
        Schema::drop('import_detail');
    }
}
