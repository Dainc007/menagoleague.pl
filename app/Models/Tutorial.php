<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;

    public const AVAILABLE_STATUSES = [
        'sent', 'pending', 'passed', 'failed'
    ];

    protected $fillable = [
        'user_id', 'rival_id', 'status', 'message', 'fullTime', 'halfTime', 'fairPlay', 'created_at', 'updated_at',
    ];

    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function getName(int $id)
    {
        return User::find($id)->value('name');
    }
}
