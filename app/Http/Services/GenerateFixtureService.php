<?php

namespace App\Http\Services;

use App\Models\Competition;
use App\Models\Fixture;
use Carbon\CarbonImmutable;

class GenerateFixtureService
{

    public static function generateSchedule(array $teams, array $details)
    {
        $meetings = self::generateMeetings($teams);
        $date = $details['startingDate'];

        foreach ($meetings as $round => $matches) {
            if ($date->dayOfWeek == 0) {
                $date->next(Fixture::WEEKDAY);
            } else {
                $date->next(Fixture::WEEKEND_DAY);
            }

            foreach ($matches as $index => $teams) {
                [$hostId, $visitorId] = $teams;

                (new Fixture([
                    'competition_id' => $details['id'],
                    'host_id'        => $hostId,
                    'visitor_id'     => $visitorId,
                    'date'           => $date,
                ]))->save();
            }
        }

        Competition::where('id', $details['id'])->update([
            'start' => $details['startingDate'],
            'end'   =>  $date,
        ]);
    }

    private static function generateMeetings(array $teams): array
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
}
