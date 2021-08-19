<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;

    public const AVAILABLE_TYPES = [
        'income', 'outgo',
    ];

    protected $fillable = [
        'id', 'title', 'price', 'money_before', 'money_after', 'type', 'team_id',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
