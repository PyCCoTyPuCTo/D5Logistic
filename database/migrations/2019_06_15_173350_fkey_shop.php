<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkeyShop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shop', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('geolocation_id')->references('id')->on('geolocation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop', function (Blueprint $table) {
            //
        });
    }
}
