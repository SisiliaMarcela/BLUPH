<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_admin')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('permission')->nullable();
            $table->date('access_date')->nullable();
            $table->time('access_time')->nullable();
            $table->tinyInteger('active')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admins');
    }
}
