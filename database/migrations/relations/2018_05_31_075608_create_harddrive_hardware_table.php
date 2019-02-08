<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHarddriveHardwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harddrive_hardware', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('hardware_id');
            $table->foreign('hardware_id')->references('id')->on('hardwares');

            $table->unsignedInteger('harddrive_id');
            $table->foreign('harddrive_id')->references('id')->on('harddrives');

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
        Schema::dropIfExists('harddrive_hardware');
    }
}
