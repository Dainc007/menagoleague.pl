<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;

    public const HOUR           = '22:00';
    public const WEEKDAY        = 'Wednesday';
    public const WEEKEND_DAY    = 'Sunday';

    protected $fillable = [
        'id',
        'competition_id',
        'host_id',
        'visitor_id',
        'host_goals',
        'visitor_goals',
        'date',
        'hour',
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function host()
    {
        return $this->hasOne(Team::class, 'id', 'host_id');
    }

    public function visitor()
    {
        return $this->hasOne(Team::class, 'id', 'visitor_id');
    }

    public function gameStats()
    {
        return $this->hasMany(GameStats::class);
    }
}
