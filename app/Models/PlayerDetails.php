<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fullName',
        'nationality',
        'age',
        'wage',
        'positions',
        'bestPosition',
        'overall',
        'height',
        'weight',
        'club',
        'id',
        'PhotoUrl',
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

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
