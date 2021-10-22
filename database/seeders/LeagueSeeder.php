<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LeaguesImport;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*         for ($level = 1; $level <= 90; $level++) {
            foreach (League::AVAILABLE_REGIONS as $region) {
                foreach (League::AVAILABLE_TYPES as $type) {
                    League::insert([
                        'region' => $region,
                        'level' => $level,
                        'type' => $type,
                    ]);
                }
            }
        } */

        Excel::import(new LeaguesImport, Storage::path('public/CSV/teams_fifa22.csv'));
    }
}
