<?php

namespace Database\Seeders;

use App\Models\Competition;
use App\Models\League;
use Illuminate\Database\Seeder;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Competition::factory(15)->create();

        foreach (LEAGUE::all() as $league) {
            Competition::create([
                'status'    => 'active',
                'league_id' => $league->id,
                'start'     => now(),
                'end'       => now()->addMonths(3),
            ]);
        }
    }
}
