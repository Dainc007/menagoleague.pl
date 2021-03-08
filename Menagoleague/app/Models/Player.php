<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    const WAGE = 5000;

    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
