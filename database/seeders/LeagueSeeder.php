<?php

namespace Database\Seeders;

use App\Models\League;
use Illuminate\Database\Seeder;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($level = 1; $level <= 90; $level++) {
            foreach (League::AVAILABLE_REGIONS as $region) {
                foreach (League::AVAILABLE_TYPES as $type) {
                    League::insert([
                        'region' => $region,
                        'level' => $level,
                        'type' => $type,
                    ]);
                }
            }
        }
    }
}
