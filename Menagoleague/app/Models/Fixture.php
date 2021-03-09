<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
