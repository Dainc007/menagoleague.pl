<?php

namespace App\Http\Controllers;

use App\Http\Services\SquadGeneratorService;
use App\Models\JobApplication;
use App\Models\PlayerDetails;
use File;
use App\Models\Role;
use App\Models\Tutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('administrator');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function tutorials()
    {
        return view('admin.tutorials', [
            'tutorials' => Tutorial::where('status', 'pending')->get(),
        ]);
    }

    public function tutorialRespond(Request $request, int $id)
    {
        $tutorial = Tutorial::find($id);

        if ($tutorial != null) {
            if ($request['reject']) {

                $tutorial->status  = 'failed';
                $tutorial->message = $request['response'];
                $tutorial->save();
                Alert::error('odrzucono');
                return back();
            }

            $tutorial->status  = 'passed';
            $tutorial->message = $request['response'];
            $tutorial->save();

            DB::table('role_user')->insert([
                'user_id' => $tutorial->user_id,
                'role_id' => Role::where('name', 'Manager')->value('id')
            ]);

            Alert::success('zaakceptowano');
            return back();
        }
    }

    public function jobApplications()
    {
        return view('admin.jobApplications', [
            'jobApplications' => JobApplication::where('status', 'pending')->orderBy('team_id')->get(),
        ]);
    }

    public function jobApplicationRespond(Request $request, int $id)
    {
        $jobApplication = JobApplication::find($id);

        if ($jobApplication == null) {
            Alert::error('Nie znaleziono aplikacji');
            return back();
        }

        if ($request['reject']) {
            $jobApplication->status  = 'rejected';
            $jobApplication->message = $request['message'];
            $jobApplication->save();
            Alert::error('Odrzucono');
            return back();
        }

        if ($request['accept']) {
            $jobApplication->status  = 'accepted';
            $jobApplication->message = $request['message'];
            $jobApplication->save();
            Alert::success('Zaakceptowano');
            return back();
        }
    }

    public function squadGenerator()
    {
        if(DB::table('squads')->find(1))
        {
            return back();
        }

        $service = (new SquadGeneratorService());
        $squads = $service->generateTeams(61);

        foreach($squads as $squad)
        {   $string = '';
            $squad = $squad->pluck('id')->toArray();
            foreach($squad as $key => $value)
            {
                $string .= "$value,";
            }

            DB::table('squads')->insert(['squad' => $string, 'created_at' => now(), 'updated_at' => now()]);
        }
    }

}
