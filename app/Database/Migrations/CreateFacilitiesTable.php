<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateFacilitiesTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table)
        {
            $table->id();

            $table->string('image');

            $table->string('name');

            $table->string('open');

            $table->string('close');

            $table->integer('capacity');

            $table->text('description');

            $table->integer('price');

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
        Schema::drop('facilities');
    }
}
