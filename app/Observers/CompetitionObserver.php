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
            $teams = Team::where('league_id', $competition->league_id)->where('is_active', true)->pluck('id');

            foreach ($teams as $team) {
                (new LeagueTable([
                    'competition_id' => $competition->id,
                    'team_id'        => $team,
                ]))->save();
            }
        }
    }
}
