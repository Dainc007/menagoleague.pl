<?php

namespace Database\Seeders;

use App\Models\Finance;
use App\Models\Team;
use Illuminate\Database\Seeder;

class FinanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Finance::factory(5000)->create();
    }
}
