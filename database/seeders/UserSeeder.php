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
        \App\Models\User::factory(100)->create();
        \App\Models\Role::factory(4)->create();

        /* foreach (User::all() as $user) {
            DB::table('role_user')->insert([
                'user_id' => $user->id,
                'role_id' => rand(1, 4)
            ]);
        } */
    }
}
