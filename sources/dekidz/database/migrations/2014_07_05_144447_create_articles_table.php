<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->default('post'); // post, page
            $table->integer('user_id');
            $table->integer('category_id')->default(0)->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('slug')->nullable();
            $table->text('body');
            $table->string('image')->nullable();
            $table->string('published_at')->nullable();
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
        Schema::drop('articles');
    }
}
