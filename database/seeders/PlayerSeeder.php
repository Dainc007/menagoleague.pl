<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\PlayersImport;
use App\Models\Player;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new PlayersImport, Storage::path('public/CSV/players_fifa22.csv'));
    }
}
