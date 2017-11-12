<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('persons', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('lastname');
          $table->string('birthday');
          $table->string('phone');
          $table->string('gender');
          $table->string('street');
          $table->string('apartment');
          $table->string('city');
          $table->string('state');
          $table->string('zip');
          $table->rememberToken();
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
        //
    }
}
