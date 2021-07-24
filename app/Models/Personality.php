<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personality extends Model
{
    use HasFactory;

    public const AVAILABLE_TRAITS = [
        'leader', 'star', 'team_player', 'bench_player', 'none', 'tenant', 'impulsive', 'fancy'
    ];

    protected $fillable = [
        'player_id',
        'greed',
        'fame',
        'leadership',
        'specialTrait',
    ];

    public function player()
    {
        return $this->hasOne(Player::class);
    }
}
