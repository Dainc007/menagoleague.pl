<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\League;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FixtureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Competition $competition)
    {
        header('Content-Type: text/plain');

        $totalTeams = 10;
        $maxTrials = 10_000_000;
        $start = time();

        $teams = Team::where('league_id', $competition->league_id)->pluck('id');
        $teams = $teams->all();

        function meetings(array $teams): array
        {
            $pairs = [];

            // Generate all possible pairs with their unique binary flag of two positive bits
            foreach (array_slice($teams, 0, -1) as $teamIndex => $team) {
                foreach (array_slice($teams, $teamIndex + 1, null, true) as $opponentIndex => $opponent) {
                    $pairs[] = [
                        'teams' => [$team, $opponent],
                        'flag' => (2 ** $teamIndex) | (2 ** $opponentIndex)
                    ];
                }
            }

            shuffle($pairs);

            // Flatten the array to make binary flags the keys
            $pairs = array_combine(
                array_column($pairs, 'flag'),
                array_column($pairs, 'teams')
            );

            $result = array_fill(0, count($teams) - 1, []);

            // Stores the binary representation of each round to check if a pair fits the round (nobody plays twice)
            $map = [];

            foreach ($pairs as $pairFlag => $teams) {
                $matchingRound = null;

                foreach ($map as $round => &$roundFlag) {
                    // Check if both teams haven't played in this round yet
                    if (($roundFlag & $pairFlag) === 0) {
                        $roundFlag |= $pairFlag;
                        $matchingRound = $round;
                        break;
                    }
                }

                if ($matchingRound === null) {
                    $matchingRound = ($round ?? -1) + 1;
                    $map[] = $pairFlag;
                }

                $result[$matchingRound][] = $teams;
            }

            return $result;
        }

        $trial = 0;

        do {
            if ($trial === $maxTrials) {
                exit('Nie udało się, za dużo prób :(');
            }

            $trial += 1;
            $meetings = meetings($teams);
            $continue = count(array_count_values(array_map('count', $meetings))) !== 1;
        } while ($continue);

        $meetings = array_map(
            fn (array $round) => array_map(
                function ($match) {
                    shuffle($match);
                    return $match;
                },
                $round
            ),
            $meetings
        );

        echo "```\n";
        printf('Liczba prób: %d%s', $trial, "\n");
        echo "\n";
        printf('Czas: %ds%s', time() - $start, "<br>");
        echo "\n";
        foreach ($meetings as $round => $matches) {
            printf('Kolejka #%d%s', $round + 1, "<br>");
            foreach ($matches as $index => $teams) {
                [$teamA, $teamB] = $teams;
                printf('%d. %s vs. %s%s', $index + 1, $teamA, $teamB, "<br>");
            }
            echo "\n";
        }
        echo "```\n";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
