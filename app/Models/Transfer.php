<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'fee', 'player_id', 'from', 'to',
        'extraPlayer_id', 'nextTransferFee', 'player_sign', 'new_team_sign', 'old_team_sign', 'status'
    ];

    public const AVAILABLE_STATUSES = [
        'rejected', 'in_progress', 'accepted'
    ];

    public const AVAILABLE_NEXT_FEES = [
        0, 5, 10, 15, 20, 25
    ];
}
