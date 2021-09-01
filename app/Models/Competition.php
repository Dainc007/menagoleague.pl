<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'status', 'league_id', 'start', 'end'
    ];

    public const AVAILABLE_STATUSES = [
        'Active'   => 'active',
        'Completed' => 'completed',
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function leagueTables()
    {
        return $this->hasMany(LeagueTable::class);
    }

    public function fixtures()
    {
        return $this->hasMany(Fixture::class);
    }

    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public static function getActiveCompetitions()
    {
        foreach (League::AVAILABLE_REGIONS as $region) {
            $id = League::where('region', $region)->where('type', 'league')->value('id');
            $competitions[strtolower($region)] = Competition::where(
                'league_id',
                $id
            )
                ->where('status', 'active')
                ->orderByDesc('id')->first();
        }

        return $competitions;
    }
}
