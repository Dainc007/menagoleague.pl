<?php

namespace App\Http\Controllers;

use App\Http\Requests\TutorialRequest;
use App\Models\Tutorial;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TutorialController extends Controller
{

    public function invite(TutorialRequest $request)
    {
        if (Auth::user()->tutorial != null) {
            Alert::error('Wysłałeś juz zaproszenie innemu uzytkownikowi!');
            return back();
        }

        if ($request['rival'] == Auth::user()->id) {
            Alert::error('Błąd!', 'Nie mozesz wyzwać samego siebie!');
            return back();
        }

        (new Tutorial([
            'user_id'  => Auth::user()->id,
            'rival_id' => $request['rival'],
        ]))->save();

        Alert::success('Zaproszenie Zostało Wysłane');
        return back();
    }

    public function respond(TutorialRequest $request, int $id)
    {
        $tutorial = Tutorial::where('id', $id)->where('status', 'sent')->first();

        if ($tutorial == null) {
            Alert::error('Coś poszło nie tak!');
            return back();
        }

        if ($request['accept']) {
            $tutorial->status = 'accepted';
            Alert::success('Challange Accepted!');
            return back();
        }

        $tutorial->status = 'rejected';
        Alert::success('Challange Rejected!');
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TutorialRequest $request, int $id)
    {
        $tutorial = Tutorial::find($id);

        if ($tutorial == null) {
            Alert::error('Coś poszło nie tak!');
            return back();
        }

        $tutorial->full_time = $request['fullTime'];
        $tutorial->half_time = $request['halfTime'];
        $tutorial->fair_play = $request['fairPlay'];
        $tutorial->status    = 'pending';
        $tutorial->save();

        Alert::success('Wniosek został wysłany!', 'Czekaj na akceptację!');
            return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        (Tutorial::find($id))->delete();
        Alert::success('Usunieto');
        return back();
    }
}
