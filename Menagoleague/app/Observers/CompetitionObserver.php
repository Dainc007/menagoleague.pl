<?php

namespace App\Observers;

use App\Models\Competition;
use App\Models\LeagueTable;
use App\Models\Team;

class CompetitionObserver
{
    public function created(Competition $competition)
    {
        if ($competition->league->type === 'league') {
            $teams = Team::where('league_id', $competition->league_id)->pluck('id');

            foreach ($teams as $team) {
                $leagueTable = new LeagueTable();
                $leagueTable->competition_id = $competition->id;
                $leagueTable->team_id = $team;
                $leagueTable->save();
            }
        }
    }
}
