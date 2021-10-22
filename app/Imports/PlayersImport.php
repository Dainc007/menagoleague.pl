<?php

namespace App\Imports;

use App\Models\Player;
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
        $search = Player::where('sofifa_id', '=', $row['id'])->first();
        if ($search) {
            return;
        }

        return new Player([
            'name'         => $row['name'],
            'fullName'     => $row['fullname'],
            'nationality'  => $row['nationality'],
            'positions'     => $row['positions'],
            'bestPosition' => $row['bestposition'],
            'overall'      => $row['overall'],
            'age'          => $row['age'],
            'real_team'    => $row['club'],
            'device_id'    => 1,
            'sofifa_id'    => $row['id'],
            'weight'       => $row['weight'],
            'height'       => $row['height'],
        ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ","
        ];
    }
}
