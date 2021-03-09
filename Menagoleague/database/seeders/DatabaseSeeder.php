<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(100)->create();
         \App\Models\League::factory(6)->create();
         \App\Models\Team::factory(100)->create();
         \App\Models\Competition::factory(10)->create();
         \App\Models\LeagueTable::factory(5)->create();
    }
}
