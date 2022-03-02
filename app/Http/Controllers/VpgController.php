<?php

namespace App\Http\Controllers;

use App\Models\Prediction;
use App\Models\Typer;
use App\Models\Vpgsettings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use MongoDB\BSON\Type;

class VpgController extends Controller
{
    public function index()
    {
        return view('vpg.pages.dashboard', [
            'typers' => Typer::all(),
        ]);

        //todo this is for game score predictions
//        return view('vpg.forms.selectTeams', [
//            'teams' => $this->getTeams(),
//        ]);
    }

    public function admin()
    {
        return view('vpg.pages.admin', [
            'typers' => Typer::all(),
        ]);
    }

    public function storeTyper()
    {
        $typer = Typer::firstOrCreate(
            ['name' => request('name')]
        );

        if($typer){
            return back();
        }
    }

    public function storePrediction()
    {
        dd(
            new Prediction([
                'typer_id' => (request('typerId')),
                'value'    => implode(',' , (request('prediction'))),
                'game'          => 1,
                'season'        => 1,
                'true_result'   => (request('trueResult')),
                'points'        => 0
            ])
        );

    }

    public function compare(Request $request)
    {
        return view('vpg.pages.scorePrediction' ,[
            'prediction' => $this->predictScore($request['team1'], $request['team2'])
        ] );

    }

    public function predictScore($teamId, $opponentId)
    {
        $results =  $this->getGamesBetweenTwoTeams($this->getAllCompletedGames($teamId), $teamId, $opponentId);
        return $this->getScorePrediction($results);
    }

    private function getAllCompletedGames($teamId)
    {   $limit = 1000;
        $source = file_get_contents("https://api.virtualprogaming.com/api/teamsbyid/$teamId/completed_matches/?limit=$limit&offset=0");
        return collect((json_decode($source))->results);
    }

    private function getTeamForm($teamId)
    {
        $limit  = 10;
        $source = file_get_contents("https://api.virtualprogaming.com/api/teamsbyid/$teamId/completed_matches/?limit=$limit&offset=0");
        $games  = collect((json_decode($source))->results);

        return [
            'wins' => $games->where('winner', '=', $teamId)->count(),
            'draws' => $games->where('winner', '=', null)->count(),
            'losts' => $games->whereNotIn('winner', [$teamId, null])->count(),
            'games' => $games->count(),
        ];
    }

    private function getGamesBetweenTwoTeams($allGames, $teamId,  $opponentId)
    {
        $home             = $allGames->where('home.id', '=', $opponentId);
        $away             = $allGames->where('away.id', '=', $opponentId);
        $gamesVsOpponent  = $home->merge($away);

        return [
            'wins'  => $gamesVsOpponent->where('winner', '=', $teamId)->count(),
            'losts' => $gamesVsOpponent->where('winner', '=', $opponentId)->count(),
            'draws' => $gamesVsOpponent->where('winner', '=', null)->count(),
            'games' => $gamesVsOpponent->count(),
        ];
    }

    private function getTeams()
    {
        $source = file_get_contents('https://api.virtualprogaming.com/api/leagues/Ekstraklasa-VPG/table/?season=146');
        $source = json_decode($source);

        $response = [];
        foreach($source as $team)
        {
            $formatted = [];
            $formatted['id']   = $team->team_id;
            $formatted['name'] = $team->team_name;
            $response[]        = $formatted;
        }
        return $response;
    }

    private function getScorePrediction($data)
    {
        return
            [
                ($data['wins'] / $data['games']) * 100,
                ($data['draws'] / $data['games']) * 100,
                ($data['losts'] / $data['games']) * 100
            ];
        // $this->getTeamForm($teamId);
       // $this->getTeamForm($opponentId);
    }
}
