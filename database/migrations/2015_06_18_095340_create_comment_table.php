<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');
            $table->string('written_by', 45)->nullable();
            $table->integer('referer_user');
            $table->integer('referer_article');
            $table->enum('level', ['0','1'])->default('0');
            $table->integer('like')->default(0);
            $table->integer('dislike')->default(0);
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
        Schema::drop('i_comments');
    }
}
