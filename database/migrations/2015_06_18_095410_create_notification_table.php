<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['0', '1', '2'])->nullable();
            $table->enum('is_read', ['0', '1'])->default('0');
            $table->string('msg');
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
        Schema::drop('i_notifications');
    }
}
