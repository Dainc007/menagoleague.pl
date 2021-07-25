<?php

namespace App\Http\Services;

use App\Models\JobApplication;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class JobApplicationService
{
    public function validate(Request $request, int $teamId)
    {
        if (!$this->checkUserDevice($teamId)) {
            Alert::error('Nie mozesz przejąć druzyny', 'Nie masz odpowiedniej konsoli');
            return redirect(route('office'));
        }

        if ($this->getApplication($teamId) !== null) {
            Alert::error('Stop', 'Juz zlozyes podanie do tej druzyny');
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

        Alert::success('Twoja Aplikacja Została wysłana', 'Czekaj na odpowiedź');
        return redirect(route('office'));
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
}
