<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_time', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_location_time')->nullable();
            $table->integer('id_location')->nullable();
            $table->integer('id_time')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('location_times');
    }
}
