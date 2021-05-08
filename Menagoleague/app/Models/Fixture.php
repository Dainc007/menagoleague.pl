<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;

    public const HOUR = '22:00';

    protected $fillable = [
        'id',
        'competition_id',
        'host_id',
        'visitor_id',
        'host_goals',
        'visitor_goals',
        'hour'
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function gameStats()
    {
        return $this->hasMany(GameStats::class);
    }
}
