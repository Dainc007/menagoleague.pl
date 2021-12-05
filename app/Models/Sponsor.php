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
        'sign_bonus',
        'league_bonus',
        'domestic_cup_bonus',
        'international_cup_bonus',
        'league_goal',
        'domestic_cup_goal',
        'international_cup_goal',
        'expiration date',
        'status',
    ];

    public const AVAILABLE_STATUSES = [
        'pending', 'signed', 'rejected', 'expired'
    ];

    public const PARAMS = [
        'minWage'     => 10000,
        'signBonus'   => 50000,
        'leagueBonus' => 100000,
        'leagueGoal'  => 'avoid_relegation'
    ];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
