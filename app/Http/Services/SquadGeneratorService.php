<?php

namespace App\Http\Services;

use App\Models\PlayerDetails;

class SquadGeneratorService
{
    private const MIN_OVR = 76;
    private const MAX_OVR = 82;
    private const MIN_PACE = 50;
    private const NUM_OF_TRIALS = 1000;
    private const POSITIONS = [
        'GK', 'LB', 'CB', 'CB', 'RB', 'LM', 'CM', 'CM', 'RM', 'ST', 'ST'
    ];

    public function __construct()
    {
        $this->players = PlayerDetails::whereBetween('overall', [self::MIN_OVR, self::MAX_OVR])
            ->where('paceTotal', '>', self::MIN_PACE )->get();
        $this->juniors = PlayerDetails::whereBetween('overall', [70, 75])->get();
        $this->avgPace = $this->players->where('bestPosition', '!=', 'GK')->avg('paceTotal');
        $this->squad   = collect([]);
        $this->squads  = collect();
    }

    public function getPlayers()
    {
        $this->getFieldPlayers();
        $this->getBenchPlayers();
        return $this->squad;
    }

    public function generateTeams(int $numOfTeams)
    {

        $this->squads = collect([]);
        for ($i = 1; $i < $numOfTeams; $i++) {
            $this->squad = $this->getPlayers();
            $this->squads->push($this->squad);
            $this->squad = collect();
        }

        return $this->squads;
    }

    private function findPlayer($positions)
    {
        $player      =  $this->players->whereIn('bestPosition', [...$positions])->random();
        $squadOvrAvg =  $this->squad->avg('overall');
        $paceAvg     =  $this->squad->where('bestPosition', '!=', 'GK')->avg('paceTotal');
        $ageAvg      =  $this->squad->avg('age');

        for ($i = 1; $i < self::NUM_OF_TRIALS; $i++) {

            //checking pace
            if ($paceAvg > $this->avgPace) {
                if ($player->paceTotal > $this->avgPace) {
                    continue;
                }
            }

            if ($squadOvrAvg > (self::MAX_OVR / self::MIN_OVR)) {
                if ($player->overall > (self::MAX_OVR / self::MIN_OVR)) {
                    continue;
                }
            }

            break;
        }
        return $player;
    }

    private function getFieldPlayers()
    {
        foreach (self::POSITIONS as $position) {
            $positions  = $this->checkPosition($position);
            $player     = $this->findPlayer($positions);

            $this->players = $this->players->reject(fn ($remove) => $remove->is($player));
            $this->squad->push($player);
        }
    }

    private function getBenchPlayers()
    {
        $positions = [
            ['LB', 'RB', 'LWB', 'RWB', 'CB'],
            ['CDM', 'CM', 'CAM'],
            ['LM', 'LW', 'RM', 'RW'],
            ['ST', 'CF'],
            ['LB', 'RB', 'LWB', 'RWB', 'CB', 'CDM', 'CM', 'CAM', 'LM', 'LW', 'RM', 'RW', 'ST', 'CF'],
            ['LB', 'RB', 'LWB', 'RWB', 'CB', 'CDM', 'CM', 'CAM', 'LM', 'LW', 'RM', 'RW', 'ST', 'CF'],
        ];

        foreach($positions as $position)
        {
            if(75 > $this->squad->avg('paceTotal'))
            {
                $player = $this->juniors->whereIn('bestPosition', [...$position])->where('paceTotal', '>', '75')->random();
            } else {
                $player = $this->juniors->whereIn('bestPosition', [...$position])->where('paceTotal', '<', '75')->random();
            }

            $this->juniors = $this->juniors->reject(fn ($remove) => $remove->is($player));
            $this->squad->push($player);
        }

        if( 76 > $this->squad->avg('overall'))
        {
            $player = $this->findPlayer(['GK']);
        } else {
            $player = $this->juniors->where('bestPosition', 'GK')->random();
        }

        $this->players = $this->players->reject(fn ($remove) => $remove->is($player));
        $this->squad->push($player);

    }


    private function checkPosition($position)
    {
        $extraPositions = [];

        if ($position == 'LB') {
            $extraPositions = ['LWB'];
        }

        if ($position == 'RB') {
            $extraPositions = ['RWB'];
        }

        if ($position == 'LM') {
            $extraPositions = ['LW'];
        }

        if ($position == 'RM') {
            $extraPositions = ['RW'];
        }

        if ($position == 'CM') {
            $extraPositions = ['CDM', 'CAM'];
        }

        return [$position, ...$extraPositions];
    }

}
