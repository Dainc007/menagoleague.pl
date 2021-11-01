<?php

namespace App\Observers;

use App\Http\Services\NotificationService;
use App\Models\Tutorial;

class TutorialObserver
{
    public function updated(Tutorial $tutorial)
    {
        if ($tutorial->wasChanged('status')) {
            NotificationService::notifyUser($tutorial);
        }
    }
}
