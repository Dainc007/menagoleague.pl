<?php

namespace App\Imports;

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
            return new Team([
                'sofifa_id'   => $row['id'],
                'name'      => $row['name'],
                'league_id' => $row['leagueid'],
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
