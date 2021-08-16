<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FixtureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Fixture::factory(100)->create();
    }
}
