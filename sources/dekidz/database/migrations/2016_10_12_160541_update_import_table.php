<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateImportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('import_detail', function (Blueprint $table) {
            $table->dropColumn('supplier');
        });
        Schema::table('import_detail', function (Blueprint $table) {
            $table->string('supplier')->after('good_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('import_detail', function (Blueprint $table) {
            $table->dropColumn('supplier');
        });
        Schema::table('import_detail', function (Blueprint $table) {
            $table->integer('supplier')->after('good_id');
        });
    }
}
