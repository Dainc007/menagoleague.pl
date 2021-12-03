<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'team_id',
        'company_id',
        'wage',
        'league_bonus',
        'domestic_cup_bonus',
        'international_cup_bonus',
        'league_goal',
        'domestic_cup_goal',
        'international_cup_goal',
        'expiration date',
        'is_signed',
    ];
}
