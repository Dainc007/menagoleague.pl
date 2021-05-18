<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RivalController extends Controller
{
    public function invite(Request $request)
    {
        Auth::user()->rivals()->attach($request['rivalId']);
        Alert::success('Success Title', 'Success Message');

        return back()->with('message', 'Zaproszenie zostało wysłane');
    }

    public function respond(int $id, Request $request)
    {
        $rival = DB::table('rival_user')->where('id', $id)->update(['status' => $request['status']]);
        return back();
    }
}
