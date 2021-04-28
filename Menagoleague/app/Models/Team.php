<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function getManager()
    {
        return $this->belongsTo(User::class);
    }

    public function getPlayers()
    {
        return $this->hasMany(Player::class);
    }

    public function getLeague()
    {
        return $this->belongsTo(League::class);
    }

    public function getCompetitions()
    {
        return $this->belongsToMany(Competition::class);
    }

    public function getFixtures()
    {
        return $this->hasMany(Fixture::class);
    }
}
