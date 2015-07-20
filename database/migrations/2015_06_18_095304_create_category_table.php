<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id');
            $table->string('name', 45);
            $table->string('alias', 45);
            $table->enum('status', ['0', '1']);
            $table->timestamp('activated_at');
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
        Schema::drop('i_categories');
    }
}
