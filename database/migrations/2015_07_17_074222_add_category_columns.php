<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('i_categories', function (Blueprint $table) {
            $table->softDeletes()->after('activated_at');
            $table->boolean('is_menu')->default(1); // 是否是菜单目录
            $table->boolean('show')->default(1); // 是否显示
            $table->string('link')->nullable()->after('alias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('i_categories', function (Blueprint $table) {
            //
        });
    }
}
