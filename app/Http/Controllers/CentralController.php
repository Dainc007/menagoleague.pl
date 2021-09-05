<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Auth;

class CentralController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $carbon = new Carbon();
        $calendar = [
            $carbon->yesterday(),
            $carbon->today(),
            $carbon->tomorrow(),
            today()->addDays(2),
            today()->addDays(3),
        ];

        if (Auth::user()->team) {
            $fixtures = Auth::user()->team->getFixtures()->whereBetween(
                'date',
                [
                    now()->yesterday()->format('Y-m-d'),
                    now()->addDays(4)->format('Y-m-d')
                ]
            );
        }

        return view('central.central', [
            'user'      => Auth::user(),
            'fixtures'  => $fixtures ?? '',
            'calendar'  => $calendar,
        ]);
    }

    public function calendar()
    {

        $first = now()->firstOfMonth()->subWeek();
        $last  = now()->lastOfMonth()->addWeek();

        $calendar = (CarbonPeriod::create($first, $last))->toArray();

        if (count($calendar) > 42) {
            array_splice($calendar, 42);
        }

        if (Auth::user()->team) {
            $fixtures = Auth::user()->team->getFixtures()->whereBetween(
                'date',
                [
                    $first->format('Y-m-d'),
                    $last->format('Y-m-d'),
                ]
            );
        }

        return view('central.inc.fullCalendar', [
            'calendar'  => $calendar,
            'fixtures'  => $fixtures ?? [],
            'week'      => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        ]);
    }
}
