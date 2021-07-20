<?php

namespace App\Http\Controllers;

use App\Http\Services\GenerateFixtureService;
use App\Models\Competition;
use App\Models\Fixture;
use App\Models\League;
use App\Models\Team;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use RealRashid\SweetAlert\Facades\Alert;

class FixtureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Competition $competition)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Competition $competition, Request $request)
    {
        $fixtureExist = Fixture::where('competition_id', $request->competition->id)->first();

        if ($fixtureExist !== null) {
            Alert::error('OOPS!', 'Fixture Already Exist!');
            return back();
        }

        try {
            $startingDate = Carbon::createFromFormat('Y-m-d', $request['start']);
            $teams        = Team::where('league_id', $competition->league_id)->pluck('id')->toArray();
            $details      = [
                'id'                  => $competition->id,
                'competition'         => $competition,
                'startingDate'        => $startingDate
            ];

            GenerateFixtureService::generateSchedule($teams, $details);
        } catch (Exception $ex) {
            Alert::error('OOPS!', 'Something went wrong, try again.');
            die;
        }

        Alert::success('Success', 'Fixture has been Created');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
