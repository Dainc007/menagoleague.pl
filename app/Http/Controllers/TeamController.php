<?php

namespace App\Http\Controllers;

use App\Http\Services\JobApplicationService;
use App\Models\JobApplication;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'team.team',
            [
                'user' => Auth::user(),
            ]
        );
    }

    public function apply(Request $request, int $teamId)
    {
        if ($request['apply']) {
            (new JobApplicationService())->validate($request, $teamId);
            return redirect()->route('office');
        }

        return view(
            'team.applicationForm',
            [
                'id'    => $teamId,
            ]
        );
    }

    public function sign(int $id)
    {
        dd($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('team.show', [
            'team' => $team
        ]);
    }
}
