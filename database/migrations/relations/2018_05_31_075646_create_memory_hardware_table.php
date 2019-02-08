<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemoryHardwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memory_hardware', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('hardware_id');
            $table->foreign('hardware_id')->references('id')->on('hardwares');

            $table->unsignedInteger('memory_id');
            $table->foreign('memory_id')->references('id')->on('memories');
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
        Schema::dropIfExists('memory_hardware');
    }
}
