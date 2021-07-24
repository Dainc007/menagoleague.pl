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
                'name'     => $row['name'],
                'device_id' => $row['device_id'],
            ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ";"
        ];
    }
}
