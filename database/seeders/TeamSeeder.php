<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TeamsImport;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new TeamsImport, Storage::path('public/CSV/teamsXbox.csv'));
        Excel::import(new TeamsImport, Storage::path('public/CSV/teamsPlaystation.csv'));
        Excel::import(new TeamsImport, Storage::path('public/CSV/teamsPC.csv'));
    }
}
