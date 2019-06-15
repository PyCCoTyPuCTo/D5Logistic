<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStorageVehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storage_vehicle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('storage_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->foreign('storage_id')->references('id')->on('storage');
            $table->foreign('vehicle_id')->references('id')->on('vehicle');
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
        Schema::dropIfExists('storage_vehicle');
    }
}
