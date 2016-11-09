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
            $table->integer('category_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('slug');
            $table->text('body');
            $table->string('image');
            $table->string('published_at');
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
