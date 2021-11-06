<?php

namespace App\Http\Services;

use App\Models\PlayerDetails;

class SquadGeneratorService
{
    private const MIN_OVR = 76;
    private const MAX_OVR = 82;
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
        foreach (self::POSITIONS as $position) {
            $this->squad->push(($this->findPlayer(($this->checkPosition($position)))));
            /* $this->checkSquadOverall(); */
        }

        return $this->squad;

    }

    public function generateTeams()
    {
        $this->squads = collect([]);
        foreach (self::POSITIONS as $position) {
            $this->squad = $this->getFirst11();
            $this->squads->push($this->squad);
            $this->squad = collect();
        }

        return $this->squads;
    }

    private function findPlayer($positions)
    {
        return $this->players->whereIn('bestPosition', [...$positions])->random();
    }

    private function checkSquadOverall()
    {
        //
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
