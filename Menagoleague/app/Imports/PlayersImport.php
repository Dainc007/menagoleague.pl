<?php

namespace App\Imports;

use App\Models\Player;
use Maatwebsite\Excel\Concerns\ToModel;

class PlayersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Player([
            'name'     => $row[0],
            'nationality' => $row[1],
            'position' => $row[2],
            'overall' => $row[3],
            'age' => $row[4],
            'real_team' => $row[5],
            'device_id' => $row[6],
            'wage' => Player::WAGE,
            'contract_lenght' => Player::CONTRACT_LENGHT,
        ]);
    }
}
