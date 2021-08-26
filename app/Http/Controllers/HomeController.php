<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Competition;
use App\Models\Fixture;
use App\Models\League;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        /* last league competitions */
        foreach (LEAGUE::AVAILABLE_REGIONS as $region) {
            $id = League::where('region', $region)->where('type', 'league')->value('id');
            $competitions[strtolower($region)] = Competition::where(
                'league_id',
                $id
            )
                ->where('status', 'active')
                ->orderByDesc('id')->value('id');
        }

        return view('home.home', [
            'articles'         => Article::limit(4)->OrderByDesc('id')->get(),
            'oldArticles'      => Article::skip(4)->take(6)->get(),
            'user'             => Auth::user(),
            'numOfUsers'       => User::max('id'),
            'numOfTeams'       => Team::where('is_active', true)->count(),
            'games'            => Fixture::where('date', '>=', now()->subDays(7))
                ->where('date', '<=', now()->addDays(7))->get(),
            'competitions'  => $competitions,
        ]);
    }

    public function rules()
    {
        return 'w budowie';
    }

    public function faq()
    {
        return 'w budowie';
    }
}
