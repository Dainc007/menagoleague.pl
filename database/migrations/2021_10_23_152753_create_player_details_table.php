<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fullName');
            $table->string('nationality');
            $table->string('positions');
            $table->string('bestPosition');
            $table->integer('overall');
            $table->integer('age');
            $table->integer('weight');
            $table->integer('height');
            $table->string('club');
            $table->string('preferredFoot');
            $table->string('photoUrl');
            $table->integer('weakFoot');
            $table->integer('skillMoves');
            $table->string('attackingWorkRate');
            $table->string('defensiveWorkrate');

            $table->integer('paceTotal');
            $table->integer('shootingTotal');
            $table->integer('passingTotal');
            $table->integer('dribblingTotal');
            $table->integer('defendingTotal');
            $table->integer('physicaliTytotal');

            $table->integer('crossing');
            $table->integer('finishing');
            $table->integer('headingAccuracy');
            $table->integer('shortPassing');
            $table->integer('volleys');
            $table->integer('dribbling');

            $table->integer('curve');
            $table->integer('FKAccuracy');
            $table->integer('longPassing');
            $table->integer('ballControl');
            $table->integer('acceleration');
            $table->integer('sprintSpeed');

            $table->integer('stamina');
            $table->integer('jumping');
            $table->integer('shotPower');
            $table->integer('balance');
            $table->integer('reactions');
            $table->integer('agility');

            $table->integer('strength');
            $table->integer('longShots');
            $table->integer('aggression');
            $table->integer('positioning');
            $table->integer('interceptions');
            $table->integer('vision');
            $table->integer('penalties');
            $table->integer('composure');
            $table->integer('marking');
            $table->integer('standingTackle');
            $table->integer('slidingTackle');

            $table->integer('GKDiving');
            $table->integer('GKHandling');
            $table->integer('GKKicking');
            $table->integer('GKPositioning');
            $table->integer('GKReflexes');

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
        Schema::dropIfExists('player_details');
    }
}
