<?php

namespace App\Imports;

use App\Models\League;
use App\Models\Team;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeamsImport implements ToModel, WithHeadingRow, WithCustomCsvSettings
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $leagueId = League::where('sofifa_id', $row['leagueid'])->value('id');

            return new Team([
                'sofifa_id'   => $row['id'],
                'name'      => $row['name'],
                'league_id' => $leagueId,
                'device_id' => 1
            ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ","
        ];
    }
}
