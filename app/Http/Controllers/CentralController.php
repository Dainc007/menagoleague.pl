<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\CarbonImmutable;
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

        return view('central.central', [
            'user'      => Auth::user(),
            'fixtures'  => Auth::user()->team->getFixtures()->whereBetween(
                'date',
                [
                    now()->yesterday()->format('Y-m-d'),
                    now()->addDays(4)->format('Y-m-d')
                ]
            ),
            'calendar'  => $calendar,
        ]);
    }
}
