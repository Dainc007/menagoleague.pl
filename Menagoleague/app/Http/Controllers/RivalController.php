<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Throwable;

class RivalController extends Controller
{
    public function invite(Request $request)
    {
        if (Auth::user()->rivals->count() >= User::MAX_USER_RIVALS) {
            Alert::error('Błąd!', 'Osiągnąłeś maksymalną liczbę rywali!');
            return back();
        }

        if ($request['rivalId'] == Auth::user()->id) {
            Alert::error('Błąd!', 'Nie mozesz wyzwać samego siebie!');
            return back();
        }

        try {
            Auth::user()->rivals()->attach($request['rivalId']);

            Alert::success('Udało się!', 'Zaproszenie zostało wysłane');
        } catch (Throwable $e) {
            report($e);

            Alert::error('Błąd!', 'Coś poszło nie tak!!');
        } finally {
            return back()->with(session()->flash('message', 'Udalo Sie'));
        }
    }

    public function respond(int $id, Request $request)
    {
        try {
            $rival = DB::table('rival_user')->where('id', $id)->update(['status' => $request['status']]);
        } catch (Throwable $e) {
            report($e);
            Alert::error('Błąd!', 'Coś poszło nie tak!!');
        } finally {
            return back();
        }
    }
}
