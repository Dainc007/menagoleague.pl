<?php

namespace App\Http\Services;

use App\Models\JobApplication;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class JobApplicationService
{
    public function validate(Request $request, int $teamId)
    {
        if (!$this->checkUserLicense(Auth::user()->id)) {
            Alert::error(__('team.apply.denied'), __('team.apply.noLicence'));
            return redirect(route('office'));
        }

        if (!$this->checkUserDevice($teamId)) {
            Alert::error(__('team.apply.denied'), __('team.apply.noDevice'));
            return redirect(route('office'));
        }

        if ($this->getApplication($teamId) !== null) {
            Alert::error(__('team.apply.stop'), __('team.apply.alreadyDone'));
            return redirect()->route('office');
        }

        $lastResponse = $this->wasLatelyRejected($teamId);

        if ($lastResponse) {
            Alert::error(__('team.apply.alreadyDone'), __('team.apply.nextApp')  . $lastResponse);
            return redirect()->route('office');
        }

        $this->storeApplication($teamId, $request['message']);
    }

    private function storeApplication($teamId, $message)
    {
        (new JobApplication([
            'user_id'   => Auth::user()->id,
            'team_id'   => $teamId,
            'message'   => $message ?? '',
        ]))->save();

        Alert::success(__('team.apply.send'), __('team.apply.waitForResponse'));
        return redirect(route('office'));
    }

    private function wasLatelyRejected($teamId)
    {
        $lastResponse = JobApplication::where('user_id', Auth::user()->id)
            ->where('team_id', $teamId)
            ->where('status', 'rejected')->first();

        if ($lastResponse == null) {
            return false;
        }

        if (now() < $lastResponse->updated_at->addDays(JobApplication::NUM_OF_DAYS)) {
            return $lastResponse->updated_at->addDays(JobApplication::NUM_OF_DAYS)->format('d-m-y h:s');
        }
    }

    private function checkUserDevice(int $teamId)
    {
        if (Auth::user()->device_id != (Team::find($teamId))->device_id) {
            return false;
        }

        return true;
    }

    private function getApplication(int $teamId)
    {
        $result =  JobApplication::where('team_id', $teamId)
            ->where('user_id', Auth::user()->id)->where('status', 'pending')->value('id');

        return $result;
    }

    private function checkUserLicense(int $id)
    {
        return (User::find($id))->isManager();
    }
}
