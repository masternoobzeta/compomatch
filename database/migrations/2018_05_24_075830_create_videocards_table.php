<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideocardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videocards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('productcode', 50);
            $table->string('brand', 50);
            $table->string('gpu', 50);
            $table->string('serie', 50);
            $table->string('memory', 50);

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
        Schema::dropIfExists('videocards');
    }
}
