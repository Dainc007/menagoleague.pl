<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
        'value',
        'transferBudget',
        'sofifa_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class)->where('device_id', '=', $this->device_id);
    }

    public function league()
    {
        return $this->belongsTo(League::class);
    }
    //todo wcześniej było samo related to League, mozliwe ze coś tym zepsułem!
    public function leagueTables()
    {
        return $this->hasMany(LeagueTable::class);
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

    public function getTeamPlayersAvg($id, $column)
    {
        $array = [];
        foreach((Team::find($id))->players as $player)
        {
            $age = $player->playerDetails->age;
            $array[] = $age;
        }
        $collection = collect($array);
        return round($collection->avg(), 1);
    }
}
