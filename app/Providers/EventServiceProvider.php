<?php

namespace App\Providers;

use App\Models\Competition;
use App\Models\JobApplication;
use App\Models\Player;
use App\Models\Team;
use App\Models\Tutorial;
use App\Models\User;
use App\Observers\CompetitionObserver;
use App\Observers\JobApplicationObserver;
use App\Observers\PlayerObserver;
use App\Observers\TeamObserver;
use App\Observers\TutorialObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $this->observeModels();
    }

    protected function observeModels()
    {
        User::observe(UserObserver::class);
        Player::observe(PlayerObserver::class);
        Competition::observe(CompetitionObserver::class);
        JobApplication::observe(JobApplicationObserver::class);
        Tutorial::observe(TutorialObserver::class);
        Team::observe(TeamObserver::class);
    }
}
