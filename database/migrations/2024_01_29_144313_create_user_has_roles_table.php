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
        Schema::create('user_has_roles', function (Blueprint $table) {
            $table->increments('user_has_roles_id');
            $table->integer('user_has_roles_usrs_rles_id');
            $table->integer('user_has_roles_usrs_id');
            $table->foreign('user_has_roles_usrs_rles_id')->references('usrs_rles_id')->on('user_roles')->onDelete('cascade');
            $table->foreign('user_has_roles_usrs_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('user_has_roles');
    }
};
