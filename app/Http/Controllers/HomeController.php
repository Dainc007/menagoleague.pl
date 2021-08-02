<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Fixture;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home', [
            'articles' => Article::all(),
            'user'  => Auth::user(),
            'games' => Fixture::where('date', '>=', now()->subDays(7))
                ->where('date', '<=', now()->addDays(7))->get(),
        ]);
    }
}
