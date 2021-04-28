<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;

    public function getCompetition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function getTeams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function getGameStats()
    {
        return $this->hasMany(GameStats::class);
    }
}
