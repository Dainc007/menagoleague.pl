<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersPersonality extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_personality', function (Blueprint $table) {
            $table->unsignedBigInteger('player_id');
            $table->integer('satisfaction');
            $table->integer('greed');
            $table->integer('ambitions');
            $table->integer('fame');

            $table->foreign('player_id')->references('id')->on('players')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players_personality');
    }
}
