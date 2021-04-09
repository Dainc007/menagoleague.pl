<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\Role;
use App\Models\Team;
use App\Models\User;
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
        \App\Models\Role::factory(4)->create();

        foreach (User::all() as $user) {
            DB::table('role_user')->insert([
                'user_id' => $user->id,
                'role_id' => rand(1, 4)
            ]);
        }

        for ($level = 1; $level <= 3; $level++) {
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

        \App\Models\Article::factory(10)->create();
        \App\Models\Team::factory(100)->create();
        \App\Models\Competition::factory(15)->create();
        \App\Models\LeagueTable::factory(10)->create();
        \App\Models\Fixture::factory(100)->create();
        \App\Models\Player::factory(1000)->create();
        \App\Models\GameStats::factory(100)->create();
    }
}
