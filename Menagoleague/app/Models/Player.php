<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    const WAGE = 5000;
    const CONTRACT_LENGHT = 10;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function gameStats()
    {
        return $this->hasMany(GameStats::class);
    }
}
