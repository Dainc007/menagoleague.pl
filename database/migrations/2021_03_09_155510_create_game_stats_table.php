<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('player_id');
            $table->boolean('apperiance')->default(false);
            $table->integer('goals')->nullable();
            $table->integer('assists')->nullable();
            $table->timestamps();

            $table->unique(['game_id', 'player_id']);

            $table->foreign('game_id')->references('id')->on('fixtures')->onDelete('CASCADE');
            $table->foreign('player_id')->references('id')->on('players')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_stats');
    }
}
