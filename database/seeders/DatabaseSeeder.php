<?php

namespace Database\Seeders;

use App\Imports\PlayersImport;
use App\Imports\TeamsImport;
use App\Models\Device;
use App\Models\League;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (Device::AVAILABLE_DEVICES as $device) {
            Device::insert(['device' => $device]);
        }

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

        Excel::import(new TeamsImport, Storage::path('public/CSV/teamsXbox.csv'));
        Excel::import(new TeamsImport, Storage::path('public/CSV/teamsPlaystation.csv'));
        Excel::import(new TeamsImport, Storage::path('public/CSV/teamsPC.csv'));

        \App\Models\Competition::factory(15)->create();
        \App\Models\LeagueTable::factory(10)->create();
        \App\Models\Fixture::factory(100)->create();

        Excel::import(new PlayersImport, Storage::path('public/CSV/playersXbox.csv'));
        Excel::import(new PlayersImport, Storage::path('public/CSV/playersPlaystation.csv'));
        Excel::import(new PlayersImport, Storage::path('public/CSV/playersPC.csv'));

        \App\Models\GameStats::factory(100)->create();
    }
}
