<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public const MONEY = 100000000;

    protected $fillable = [
        'id',
        'name',
        'user_id',
        'league_id',
        'device_id',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function leagueTables()
    {
        return $this->hasMany(League::class);
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }

    public function finances()
    {
        return $this->hasMany(Finance::class);
    }

    public function fixturesAsHost()
    {
        return $this->hasMany(Fixture::class, 'host_id');
    }

    public function fixturesAsVisitor()
    {
        return $this->hasMany(Fixture::class, 'visitor_id');
    }

    public function getFixtures()
    {
        return $this->fixtures = $this->fixturesAsHost->merge($this->fixturesAsVisitor);
    }
}
