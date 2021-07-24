<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
    ];

    public const AVAILABLE_ROLES = [
        'User', 'Manager', 'Moderator', 'Administrator'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
