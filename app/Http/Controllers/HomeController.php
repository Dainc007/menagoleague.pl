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
        return view('home.home', [
            'articles'         => Article::limit(4)->OrderByDesc('id')->get(),
            'oldArticles'      => Article::skip(4)->take(6)->get(),
            'user'             => Auth::user(),
            'numOfUsers'       => User::max('id'),
            'numOfTeams'       => Team::where('is_active', true)->count(),
            'games'            => Fixture::where('date', '>=', now()->subDays(7))
                ->where('date', '<=', now()->addDays(7))->get(),
        ]);
    }

    public function help()
    {
        return view('help.help');
    }

    public function rules()
    {
        return view('help.rules');
    }

    public function faq()
    {
        return view('help.faq');
    }

    public function tutorial()
    {
        return view('help.tutorial');
    }
}
