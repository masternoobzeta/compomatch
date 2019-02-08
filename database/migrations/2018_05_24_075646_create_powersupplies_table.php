<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePowersuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('powersupplies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('productcode', 50);
            $table->string('brand', 50);
            $table->string('wattage', 50);

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
        Schema::dropIfExists('powersupplies');
    }
}
