<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReplacementLoungesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replacement_lounge', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_student')->nullable();
            $table->string('studentID')->nullable();
            $table->string('intake')->nullable();
            $table->dateTime('jadwal_jam_kuliah')->nullable();
            $table->string('alasan_melakukan_replacement_lounge')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('replacement_lounge');
    }
}
