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
}
