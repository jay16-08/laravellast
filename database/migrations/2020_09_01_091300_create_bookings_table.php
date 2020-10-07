<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('booking_id');
            $table->date('booking_date');
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('room_id')->on('rooms'); 
            $table->integer('customers_id')->unsigned();
            $table->foreign('customers_id')->references('customers_id')->on('customers'); 
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('extras');
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('Amount'); 
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
        Schema::dropIfExists('bookings');
    }
}
