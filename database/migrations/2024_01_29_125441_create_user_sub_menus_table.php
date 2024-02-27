<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sub_menus', function (Blueprint $table) {
            $table->increments('usrs_sub_menu_id');
            $table->string('usrs_sub_menu_title');
            $table->string('usrs_sub_menu_url');
            $table->string('usrs_sub_menu_icon')->nullable();
            $table->string('usrs_sub_menu_sort');
            $table->integer('usrs_sub_menu_usrs_menu_id');
            $table->foreign('usrs_sub_menu_usrs_menu_id')->references('usrs_menu_id')->on('user_menus')->onDelete('cascade');
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
        Schema::dropIfExists('user_sub_menus');
    }
};
