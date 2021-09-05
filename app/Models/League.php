<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'region', 'type', 'level'
    ];

    public const AVAILABLE_REGIONS = [
        'England'   => 'England',
        'Germany'   => 'Germany',
        'France'    => 'France',
        'Italy'     => 'Italy',
        'Spain'     => 'Spain',
        'Poland'    => 'Poland',
        'Portugal'  => 'Portugal',
        'Nederland' => 'Nederland',
        'Europe'    => 'Europe',
    ];

    public const AVAILABLE_LEVELS = [
        '1'   => 1,
        '2' => 2,
        '3' => 3,
    ];

    public const AVAILABLE_TYPES = [
        'league'   => 'league',
        'cup' => 'cup',
        'league&cup' => 'league&cup',
    ];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function competitions()
    {
        return $this->hasMany(Competition::class);
    }
}
