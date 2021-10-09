<?php

namespace App\Observers;

use App\Http\Services\JobApplicationService;
use App\Models\JobApplication;

class JobApplicationObserver
{
    public function updated(JobApplication $application)
    {
        if($application->wasChanged('status'))
        {
            JobApplicationService::notifyUser($application);
        }
    }
}
