<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GameStatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\GameStats::factory(100)->create();
    }
}
