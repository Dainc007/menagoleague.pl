<?php

namespace App\Http\Controllers;

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
        return view('central.central', [
            'user' => Auth::user(),
        ]);
    }
}
