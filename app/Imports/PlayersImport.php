<?php

namespace App\Imports;

use App\Models\Player;
use App\Models\PlayerDetails;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PlayersImport implements ToModel, WithHeadingRow, WithCustomCsvSettings
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $search = PlayerDetails::find($row['id']);
        if ($search) {
            return;
        }

        for ($i = 1; $i < 4; $i++) {
            (new Player([
                'name'      => $row['name'],
                'device_id' => $i,
                'playerDetails_id' => $row['id'],
            ]))->save();
        }

        return new PlayerDetails([
            'name'         => $row['name'],
            'fullName'     => $row['fullname'],
            'nationality'  => $row['nationality'],
            'positions'     => $row['positions'],
            'bestPosition' => $row['bestposition'],
            'overall'      => $row['overall'],
            'age'          => $row['age'],
            'club'         => $row['club'],
            'id'           => $row['id'],
            'weight'       => $row['weight'],
            'height'       => $row['height'],
            'photoUrl'     => $row['photourl'],

            'preferredFoot' => $row['preferredfoot'],
            'weakFoot'      => $row['weakfoot'],
            'skillMoves'    => $row['skillmoves'],
            'attackingWorkRate' => $row['attackingworkrate'],
            'defensiveWorkrate' => $row['defensiveworkrate'],

            'paceTotal'        => $row['pacetotal'],
            'shootingTotal'    => $row['shootingtotal'],
            'passingTotal'     => $row['passingtotal'],
            'dribblingTotal'   => $row['dribblingtotal'],
            'defendingTotal'   => $row['defendingtotal'],
            'physicalityTotal' => $row['physicalitytotal'],

            'crossing' => $row['crossing'],
            'finishing' => $row['finishing'],
            'headingAccuracy' => $row['headingaccuracy'],
            'shortPassing' => $row['shortpassing'],
            'volleys'  => $row['volleys'],
            'dribbling' => $row['dribbling'],
            'curve' => $row['curve'],
            'FKAccuracy' => $row['fkaccuracy'],
            'longPassing' => $row['longpassing'],
            'ballControl'   => $row['ballcontrol'],
            'acceleration' => $row['acceleration'],
            'sprintSpeed' => $row['sprintspeed'],
            'agility'     => $row['agility'],
            'reactions'   => $row['reactions'],
            'balance'    => $row['balance'],
            'shotPower'  => $row['shotpower'],
            'jumping'   => $row['jumping'],
            'stamina'   => $row['stamina'],
            'strength'  => $row['strength'],
            'longShots' => $row['longshots'],
            'aggression' => $row['aggression'],
            'interceptions' => $row['interceptions'],
            'positioning' => $row['positioning'],
            'vision'      => $row['vision'],
            'penalties'   => $row['penalties'],
            'composure' => $row['composure'],
            'marking' => $row['marking'],
            'standingTackle' => $row['standingtackle'],
            'slidingTackle' => $row['slidingtackle'],

            'GKDiving'  => $row['gkdiving'],
            'GKHandling' => $row['gkhandling'],
            'GKKicking' => $row['gkkicking'],
            'GKPositioning' => $row['gkpositioning'],
            'GKReflexes'    => $row['gkreflexes'],

        ]);
    }


    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ","
        ];
    }
}
