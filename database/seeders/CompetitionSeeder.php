<?php

namespace Database\Seeders;

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
    }
}
