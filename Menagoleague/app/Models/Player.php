<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public const WAGE = 5000;
    public const CONTRACT_LENGHT = 10;
    public const AVAILABLE_ROLES = ['future_first_11', 'bench', 'important', 'key'];

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

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class)->withPivot(
            'contract_expires',
            'contract_sign_at',
            'player_role',
            'wage',
        )->orderByPivot('contract_expires', 'DESC');
    }

    public function personality()
    {
        return $this->belongsTo(Personality::class, 'id');
    }

    public function gameStats()
    {
        return $this->hasMany(GameStats::class);
    }
}
