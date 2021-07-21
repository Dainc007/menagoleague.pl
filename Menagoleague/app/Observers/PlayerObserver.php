<?php

namespace App\Observers;

use App\Models\Player;
use App\Models\Personality;
use Illuminate\Support\Arr;

class PlayerObserver
{
    public function created(Player $player)
    {
        Personality::insert([
            'player_id'     => $player->id,
            'greed'         => rand(1, 100),
            'leadership'    => rand(1, 100),
            'ambitions'     => rand(1, 100),
            'fame'          => rand(1, 100),
            'loyalty'       => rand(1, 100),
            'specialTrait'  => Arr::random(Personality::AVAILABLE_TRAITS),
        ]);
    }
}
