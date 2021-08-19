<?php

namespace Database\Seeders;

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
        \App\Models\Finance::factory(1000)->create();
    }
}
