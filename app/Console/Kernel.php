<?php

namespace App\Console;

use App\Http\Services\SponsorService;
use App\Models\Company;
use App\Models\Sponsor;
use App\Models\Team;
use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            $this->payPlayersSalary();
        })->weekly();

        $schedule->call(function () {
            $this->createFirstSponsorship();
            $this->checkSponsors();
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    private function payPlayersSalary()
    {
   /*     $this->takeMoneyFromTeams();
        $this->updateFinances();
        $this->notifyUser();*/

    }

    private  function checkSponsors()
    {
        $teams = Team::where('is_active', true)->get();

        foreach($teams as $team)
        {
            if(!$team->hasActiveSponsor())
            {
                $this->offerSponsorship($team);
            }
        }
    }

    private function offerSponsorship($team)
    {
        $hasOffer = Sponsor::where('team_id', $team->id)->where('status', 'pending')->first();

        if($hasOffer)
        {
            return;
        }
    }

    private function createFirstSponsorship()
    {
        foreach((Team::where('status', 'active')->get()) as $team)
        {
            $hasSponsorship = Sponsor::where('team_id', $team->id)->first();

            if($hasSponsorship)
            {
                return;
            }

            SponsorService::createFirstSponsorOffers($team->id);
        }
    }
}
