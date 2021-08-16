<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LeagueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\LeagueTable::factory(10)->create();
    }
}
