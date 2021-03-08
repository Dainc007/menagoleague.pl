<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    public const AVAILABLE_LEAGUES = [
        'English'   => 'English',
        'German' => 'German',
        'French' => 'French',
        'Italian' => 'Italian',
        'Spanish' => 'Spanish',
        'Polish' => 'Polish',
    ];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
