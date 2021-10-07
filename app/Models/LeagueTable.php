<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeagueTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'team_id',
        'points', 'games',
        'wins',
        'draws', 'losts',
        'goals_scored',
        'goals_lost',
        'bilans', 'competition_id',
        'created_at', 'updated_at'
    ];

    public function competition()
    {
        return $this->hasOne(Competition::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }


    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
