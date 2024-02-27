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
        Schema::create('role_has_menus', function (Blueprint $table) {
            $table->increments('rles_has_menus_id');
            $table->integer('rles_has_menus_usrs_rles_id');
            $table->integer('rles_has_menus_usrs_menu_id');
            $table->foreign('rles_has_menus_usrs_rles_id')->references('usrs_rles_id')->on('user_roles')->onDelete('cascade');
            $table->foreign('rles_has_menus_usrs_menu_id')->references('usrs_menu_id')->on('user_menus')->onDelete('cascade');
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
        Schema::dropIfExists('role_has_menus');
    }
};
