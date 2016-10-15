<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateImportTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('import', function (Blueprint $table) {
            $table->dropColumn('cost');
        });
        Schema::table('import', function (Blueprint $table) {
            $table->double('cost', 18, 2)->after('date');
        });

        Schema::table('import_detail', function (Blueprint $table) {
            $table->dropColumn('cost');
        });
        Schema::table('import_detail', function (Blueprint $table) {
            $table->double('cost', 18, 2)->after('supplier');
        });

        Schema::table('assets', function (Blueprint $table) {
            $table->dropColumn('import_date');
            $table->dropColumn('supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('import', function (Blueprint $table) {
            $table->dropColumn('cost');
        });
        Schema::table('import', function (Blueprint $table) {
            $table->float('cost')->after('date');
        });

        Schema::table('import_detail', function (Blueprint $table) {
            $table->dropColumn('cost');
        });
        Schema::table('import_detail', function (Blueprint $table) {
            $table->float('cost')->after('supplier');
        });

        Schema::table('assets', function (Blueprint $table) {
            $table->string('supplier')->after('quantity');
            $table->dateTime('import_date')->after('supplier');
        });
    }
}
