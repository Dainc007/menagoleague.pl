<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cup extends Model
{
    use HasFactory;

    protected $fillable = [
        //
    ];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
