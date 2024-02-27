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
        Schema::create('role_has_permissions', function (Blueprint $table) {
            $table->increments('rles_has_permissions_id');
            $table->integer('rles_has_permissions_usrs_permissions_id');
            $table->integer('rles_has_permissions_usrs_roles_id');
            $table->foreign('rles_has_permissions_usrs_permissions_id')->references('prms_id')->on('permissions')->onDelete('cascade');
            $table->foreign('rles_has_permissions_usrs_roles_id')->references('usrs_rles_id')->on('user_roles')->onDelete('cascade');
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
        Schema::dropIfExists('role_has_permissions');
    }
};
