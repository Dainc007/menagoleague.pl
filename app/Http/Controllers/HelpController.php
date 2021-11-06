<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index()
    {
        return 'help';
    }

    public function tutorial()
    {
        return view('help.tutorial');
    }

    public function statute()
    {
        return 'statute';
    }
}
