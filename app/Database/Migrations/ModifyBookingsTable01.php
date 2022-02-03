<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class ModifyBookingsTable01
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table)
        {
            $table->string('payment_code');

        });
    }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        // Schema::drop('bookings');
    }
}
