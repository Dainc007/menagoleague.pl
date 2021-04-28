<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public const WAGE = 5000;
    public const CONTRACT_LENGHT = 10;

    protected $fillable = [
        'id',
        'name',
        'nationality',
        'age',
        'team_id',
        'device_id',
        'wage',
        'contract_lenght',
        'position',
        'overall',
        'real_team',
    ];

    public function getTeam()
    {
        return $this->belongsTo(Team::class);
    }

    public function getGameStats()
    {
        return $this->hasMany(GameStats::class);
    }
}
