<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateBookingsTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table)
        {
            $table->id();

            $table->string('user_id');

            $table->string('room_id');

            $table->date('check_in');

            $table->date('check_out');

            $table->string('days');

            $table->integer('price_day');

            $table->integer('total_price');

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
        Schema::drop('bookings');
    }
}
