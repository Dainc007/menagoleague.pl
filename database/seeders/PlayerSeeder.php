<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\PlayersImport;
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
        \App\Models\Player::factory(1000)->create();
        /* Excel::import(new PlayersImport, Storage::path('public/CSV/playersXbox.csv'));
        Excel::import(new PlayersImport, Storage::path('public/CSV/playersPlaystation.csv'));
        Excel::import(new PlayersImport, Storage::path('public/CSV/playersPC.csv')); */
    }
}
