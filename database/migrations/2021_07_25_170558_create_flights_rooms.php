<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsRooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights_rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servi_id');
            $table->string('room_no');
            $table->integer('floor');
            $table->string('image')->nullable();
            $table->text('detail')->nullable();
            $table->integer('price')->default(0);
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
        Schema::dropIfExists('flights_rooms');
    }
}
