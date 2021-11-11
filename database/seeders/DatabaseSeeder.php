<?php

namespace Database\Seeders;

use App\Imports\PlayersImport;
use App\Imports\TeamsImport;
use App\Models\Article;
use App\Models\Competition;
use App\Models\Device;
use App\Models\Finance;
use App\Models\GameStats;
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
        $this->call([
            DeviceSeeder::class,
            UserSeeder::class,
            LeagueSeeder::class,
            TeamSeeder::class,
/*          CompetitionSeeder::class,
            LeagueTableSeeder::class,
            FixtureSeeder::class, */
            PlayerSeeder::class,
            /* GameStatsSeeder::class, */
            ArticleSeeder::class,
            /* FinanceSeeder::class, */
        ]);
    }
}
