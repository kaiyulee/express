<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 120);
            $table->string('author', 80);
            $table->text('content');
            $table->string('source')->nullable();
            $table->integer('category');
            $table->integer('hits')->default(0);
            $table->integer('like')->default(0);
            $table->integer('dislike')->default(0);
            $table->integer('share')->default(0);
            $table->timestamp('published_at');
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
        Schema::drop('i_articles');
    }
}
