<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usrs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150);
            $table->integer('city_id')->unsigned;
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usrs');
    }
}
