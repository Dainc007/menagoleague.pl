<?php

namespace App\Observers;

use App\Http\Services\TutorialService;
use App\Models\Tutorial;

class TutorialObserver
{
    public function updated(Tutorial $tutorial)
    {
        if ($tutorial->wasChanged('status')) {
            TutorialService::notifyUser($tutorial);
        }
    }
}
