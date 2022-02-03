<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateRoomsTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table)
        {
            $table->id();

            $table->string('image');

            $table->string('name');

            $table->integer('beds');

            $table->integer('baths');

            $table->integer('price');

            $table->string('status')->default('checked in');

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
        Schema::drop('rooms');
    }
}
