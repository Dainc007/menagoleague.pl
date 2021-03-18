<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    public const AVAILABLE_REGIONS = [
        'England'   => 'England',
        'Germany' => 'Germany',
        'France' => 'France',
        'Italy' => 'Italy',
        'Spain' => 'Spain',
        'Poland' => 'Poland',
        'Europe' => 'Europe',
    ];

    public const AVAILABLE_LEVELS = [
        '1'   => 1,
        '2' => 2,
    ];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
