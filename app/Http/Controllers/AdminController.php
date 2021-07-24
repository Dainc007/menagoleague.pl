<?php

namespace App\Http\Controllers;

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
}
