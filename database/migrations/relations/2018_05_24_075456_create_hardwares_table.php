<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Fluent;

class CreateHardwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardwares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);

            $table->unsignedInteger('motherboard_id');
            $table->foreign('motherboard_id')->references('id')->on('motherboards');

            $table->unsignedInteger('tower_id');
            $table->foreign('tower_id')->references('id')->on('towers');

            $table->unsignedInteger('powersupply_id');
            $table->foreign('powersupply_id')->references('id')->on('powersupplies');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('hardwares');
    }
}
    