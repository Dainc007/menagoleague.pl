<?php

namespace App\Imports;

use App\Models\League;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LeaguesImport implements ToModel, WithHeadingRow, WithCustomCsvSettings
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $data = explode(" ", $row['league']);
        $region = $data[0];
        $search = League::where('region', '=', $region)->first();
        if ($search) {
            return;
        }
        array_splice($data, -1);
        $name   = implode(" ", $data);

        return new League([
            'region'   => $region,
            'name'     => $name,
            'sofifa_id' => $row['leagueid'],
        ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ","
        ];
    }
}
