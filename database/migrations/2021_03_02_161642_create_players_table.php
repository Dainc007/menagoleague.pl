<?php

use App\Models\Player;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    protected $fillable = [
        'faceUrl',

        'preferredFoot',
        'weakFoot',
        'skillMoves',
        'attackingWorkRate',
        'defensiveWorkRate',
        'paceTotal',
        'shootingTotal',
        'passingTotal',
        'dribblingTotal',
        'defendingTotal',
        'physicalityTotal',
        'crossing',
        'finishing',
        'headingAccuracy',
        'shortPassing',
        'volleys',
        'dribbling',
        'curve',
        'FKAccuracy',
        'longPassing',
        'ballControl',
        'acceleration',
        'sprintSpeed',
        'agility',
        'reactions',
        'balance',
        'shotPower',
        'jumping',
        'stamina',
        'strength',
        'longShots',
        'aggression',
        'interceptions',
        'positioning',
        'vision',
        'penalties',
        'composure',
        'marking',
        'standingTackle',
        'slidingTackle',
        'GKDiving',
        'GKHandling',
        'GKKicking',
        'GKPositioning',
        'GKReflexes'
    ];

    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->unsignedBigInteger('device_id')->nullable();
            $table->boolean('transfer_listed');
            $table->boolean('loan_listed');
            $table->unsignedBigInteger('playerDetails_id');

            $table->unique(['playerDetails_id', 'device_id']);
            $table->timestamps();

            $table->foreign('device_id')->references('id')->on('devices')->onDelete('CASCADE');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('CASCADE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
