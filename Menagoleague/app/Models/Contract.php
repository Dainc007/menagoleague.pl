<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    public const MAX_LENGHT         = 150;
    public const BASIC_LENGHT       = 90;
    public const AVAILABLE_STATUSES = ['active', 'expired'];

    public const AVAILABLE_TYPES = [
        'player', 'user', 'sponsor'
    ];

    protected $fillable = [
        'id', 'type', 'status', 'release', 'player_id', 'team_id', 'sponsor_id',
        'contract_sign_at', 'contract_last_extension', 'contract_expires',
    ];
}
