<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpuHardwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpu_hardware', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('hardware_id');
            $table->foreign('hardware_id')->references('id')->on('hardwares');

            $table->unsignedInteger('cpu_id');
            $table->foreign('cpu_id')->references('id')->on('cpus');

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
        Schema::dropIfExists('cpu_hardware');
    }
}
