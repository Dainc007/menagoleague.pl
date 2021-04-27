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
            return new Player([
                'name'     => $row['name'],
                'nationality' => $row['nationality'],
                'position' => $row['position'],
                'overall' => $row['overall'],
                'age' => $row['age'],
                'real_team' => $row['real_team'],
                'device_id' => $row['device'],
                'wage' => Player::WAGE,
                'contract_lenght' => Player::CONTRACT_LENGHT,
            ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ";"
        ];
    }
}
