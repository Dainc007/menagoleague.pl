<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function players()
    {
        return $this->belongsToMany(Player::class)->withPivot('contract_expires');
    }

    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function competitions()
    {
        return $this->belongsToMany(Competition::class);
    }

    public function fixtures()
    {
        return $this->hasMany(Fixture::class);
    }
}
