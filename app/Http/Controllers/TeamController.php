<?php

namespace App\Http\Controllers;

use App\Http\Services\JobApplicationService;
use App\Models\JobApplication;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $squads = $this->getSquads();

        return view(
            'team.team',
            [
                'user'   => Auth::user(),
                'squads' => $squads
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

    public function sign(Request $request)
    {
        //confirm Job

        $job = JobApplication::find($request['jobId']);
        $job->status = 'signed';
        $job->save();

        return back();
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

    public function squadGenerator(Request $request)
    {
        if($request['squad'])
        {
            $ids = DB::table('squads')->where('user_id', Auth::user()->id)->pluck('id')->toArray();
            unset($ids[$request['squad']]);
            DB::table('squads')->whereIn('id', $ids)->update(['user_id' => null]);

            $playerDetailIds = DB::table('squads')->where('user_id', Auth::user()->id)->first();
            $playerDetailIds = explode(',' , $playerDetailIds->squad);
            unset($playerDetailIds[18]);
            $playersIds = Player::where('device_id', Auth::user()->device_id)->whereIn('playerDetails_id', $playerDetailIds)->pluck('id')->toArray();

            Player::whereIn('id', $playersIds)->update(['team_id' => Auth::user()->team->id]);

            return back();
        }

        $hasUserSquad = DB::table('squads')->where('user_id', Auth::user()->id)->first();

        /* Jeśli znajdzie trzy to zwracamy widok, jeśli jeden to znaczy ze ma juz ekipe */
        
        if($hasUserSquad)
        {
            return back();
        }

        $ids = DB::table('squads')->where('user_id', null)->limit(3)->pluck('id');

        DB::table('squads')->whereIn('id', $ids->toArray())->update(['user_id' => Auth::user()->id, 'updated_at' => now()]);

        $squads = DB::table('squads')->whereIn('id', $ids->toArray())->get();

        return back();
    }

    private function getSquads()
    {

        $squads = DB::table('squads')->where('user_id', Auth::user()->id)->get();
        if($squads)
        {
            $collection = [];
            foreach($squads as $squad)
            {
                $string = $squad->squad;
                $playerDetailIds = explode(',' , $string);
                unset($playerDetailIds[18]);
                $players = Player::where('device_id', Auth::user()->device_id)->whereIn('playerDetails_id', $playerDetailIds)->get();
                $collection[] = $players;
            }
            $collection = collect($collection);

            return $collection;
        }

    }
}
