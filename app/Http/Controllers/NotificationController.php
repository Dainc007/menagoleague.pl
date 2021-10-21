<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Mark Notification as Seen.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function markAsSeen(Request $request)
    {
        $notification = Notification::findOrFail($request['id']);

        if ($notification) {
            $notification->seen = true;
            $notification->save();

            return response('ok2', 200);
        } else {
            return response('Not Found', 404);
        }
    }
}
