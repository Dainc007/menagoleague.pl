<?php

namespace App\Observers;

use App\Models\Player;
use App\Models\Personality;

class PlayerObserver
{
    public function created(Player $player)
    {
        Personality::insert([
            'satisfaction'  => Personality::PLAYER_SATISFACTION,
            'greed'         => rand(1, 100),
            'leadership'    => rand(1, 100),
            'ambitions'     => rand(1, 100),
            'fame'          => rand(1, 100),
        ]);
    }
}
