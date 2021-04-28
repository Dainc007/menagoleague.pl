<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personality extends Model
{
    use HasFactory;

    public const PLAYER_SATISFACTION = 100;

    protected $fillable = [
        'player_id',
        'satisfaction',
        'greed',
        'fame',
        'leadership'
    ];

    public function player()
    {
        return $this->hasOne(Player::class);
    }
}
