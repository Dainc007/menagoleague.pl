<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $user = User::factory()->create([
            'version'   => 'ultimate',
            'facebook'  => 'danielvandaniel',
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                    /* ->type('name', $user->name) */
                    ->type('password', 'password')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }
}
