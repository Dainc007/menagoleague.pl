<?php

namespace App\Http\Services;

use App\Models\PlayerDetails;

class SquadGeneratorService
{
    private const MIN_OVR = 76;
    private const MAX_OVR = 82;
    private const NUM_OF_TRIALS = 1000;
    private const POSITIONS = [
        'GK', 'LB', 'CB', 'CB', 'RB', 'LM', 'CM', 'CM', 'RM', 'ST', 'ST'
    ];

    public function __construct()
    {
        $this->players = PlayerDetails::whereBetween('overall', [self::MIN_OVR, self::MAX_OVR])->get();
        $this->avgPace = $this->players->avg('paceTotal');
        $this->squad   = collect([]);
        $this->squads  = collect();
    }

    public function getFirst11()
    {
        $x = ($this->players->count());
        foreach (self::POSITIONS as $position) {
            $positions  = $this->checkPosition($position);
            $player     = $this->findPlayer($positions);

            $this->players = $this->players->reject(fn ($remove) => $remove->is($player));

            $this->squad->push($player);
        }

        $y = ($this->players->count());

        return $this->squad;
    }

    public function generateTeams(int $numOfTeams)
    {

        $this->squads = collect([]);
        for ($i = 1; $i < $numOfTeams; $i++) {
            $this->squad = $this->getFirst11();
            $this->squads->push($this->squad);
            $this->squad = collect();
        }

        return $this->squads;
    }

    private function findPlayer($positions)
    {
        $player      =  $this->players->whereIn('bestPosition', [...$positions])->random();
        $squadOvrAvg =  $this->squad->avg('overall');
        $paceOvr     =  $this->squad->avg('paceTotal');

        for ($i = 1; $i < self::NUM_OF_TRIALS; $i++) {
            if ($squadOvrAvg > self::MIN_OVR / self::MAX_OVR) {
                if ($player->overall > self::MIN_OVR / self::MAX_OVR) {
                    continue;
                }
            }

            if ($paceOvr > $this->avgPace) {
                if ($player->paceTotal > $this->avgPace) {

                    continue;
                }
            }
            break;
        }
        return $player;
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
