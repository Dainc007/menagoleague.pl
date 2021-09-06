<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        //
    ];

    public const AVAILABLE_NEXT_FEES = [
        0,5,10,15,20,25
    ];
}
