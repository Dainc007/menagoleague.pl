<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'typer_id',
        'game',
        'season',
        'true_result',
        'value',
        'points'
    ];
}
