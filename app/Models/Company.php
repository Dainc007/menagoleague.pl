<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'level',
        'budget',
        'size',
    ];

    public const MIN_BUDGET = 1000000;
}
