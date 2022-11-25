<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('order_id')->nullable();
            $table->integer('id_location')->nullable();
            $table->date('date')->nullable();
            $table->string('nim')->nullable();
            $table->integer('id_time')->nullable();
            $table->string('order_status')->nullable();
            $table->string('note')->nullable();
            $table->tinyInteger('present')->nullable();
            $table->integer('id_admin')->nullable();
            $table->string('handle_by')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
