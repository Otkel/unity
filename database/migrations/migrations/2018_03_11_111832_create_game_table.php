<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team1_id')->unsigned();
            $table->integer('tour_id')->unsigned();
            $table->integer('team2_id')->unsigned();
            $table->date('date');
            $table->string('status');
            $table->foreign('team1_id')->references('id')->on('team');
            $table->foreign('tour_id')->references('id')->on('tour');
            $table->foreign('team2_id')->references('id')->on('team');
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
        Schema::dropIfExists('game');
    }
}
