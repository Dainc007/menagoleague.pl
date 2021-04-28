<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    public const AVAILABLE_STATUSES = [
        'Active'   => 'active',
        'Completed' => 'completed',
    ];

    public function getTeams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function getLeagueTable()
    {
        return $this->hasOne(LeagueTable::class);
    }

    public function getFixtures()
    {
        return $this->hasMany(Fixture::class);
    }
}
