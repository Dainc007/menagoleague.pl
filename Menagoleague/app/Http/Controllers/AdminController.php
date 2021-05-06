<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\League;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('administrator');
    }
}
