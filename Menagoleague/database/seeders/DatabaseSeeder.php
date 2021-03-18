<?php

namespace Database\Seeders;

use App\Models\Competition;
use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
         \App\Models\League::factory(5)->create();
         \App\Models\Team::factory(100)->create();
         \App\Models\Competition::factory(10)->create();
         \App\Models\LeagueTable::factory(10)->create();     
         \App\Models\Fixture::factory(100)->create();   
         \App\Models\Player::factory(1000)->create();
         \App\Models\GameStats::factory(100)->create();               
    }
}
