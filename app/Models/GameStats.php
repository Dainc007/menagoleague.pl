<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameStats extends Model
{
    use HasFactory;

    public function fixture()
    {
        return $this->belongsTo(Fixture::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
