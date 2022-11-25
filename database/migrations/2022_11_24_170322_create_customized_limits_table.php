<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomizedLimitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customized_limit', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_location')->nullable();
            $table->date('date')->nullable();
            $table->integer('limit')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customized_limits');
    }
}
