<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\League;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('competition.index', [
            'competitions' => Competition::where('status', 'active')
            ->orderBy('league_id', 'ASC')
            ->orderBy('id', 'DESC')
            ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('competition.create', [
            'regions'     => League::AVAILABLE_REGIONS,
            'leagueTypes' => League::AVAILABLE_TYPES,
            'levels'       => League::AVAILABLE_LEVELS
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $leagueId = League::where('region', $request['region'])
            ->where('type', $request['type'])
            ->where('level', $request['level'])
            ->value('id');

        $competition = new Competition();
        $competition->league_id = $leagueId;
        $competition->save();

        return back(200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Competition $competition)
    {
        return view('competition.show', [
            'competition' => $competition
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
