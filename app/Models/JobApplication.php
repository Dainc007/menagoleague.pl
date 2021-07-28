<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    /* How often user can apply for the same job if he got rejected */
    public const NUM_OF_DAYS = 7;

    public const AVAILABLE_STATUSES = [
       'pending', 'accepted', 'rejected'
    ];

    protected $fillable = [
        'user_id', 'team_id', 'response', 'status', 'message', 'created_at', 'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
