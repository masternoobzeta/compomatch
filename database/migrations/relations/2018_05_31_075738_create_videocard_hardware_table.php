<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideocardHardwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videocard_hardware', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('hardware_id');
            $table->foreign('hardware_id')->references('id')->on('hardwares');

            $table->unsignedInteger('videocard_id');
            $table->foreign('videocard_id')->references('id')->on('videocards');

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
        Schema::dropIfExists('videocard_hardware');
    }
}
