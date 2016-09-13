<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDdAssetOverviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('am_asset_overview', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('name');
            $table->integer('quantity');
            $table->string('supplier');
            $table->date('import_date');
            $table->string('maintenance_mode');
            $table->string('unit');
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
