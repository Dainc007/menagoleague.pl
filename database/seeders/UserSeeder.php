<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     /*   \App\Models\User::factory(100)->create();*/
        \App\Models\Role::factory(5)->create();
    }
}
