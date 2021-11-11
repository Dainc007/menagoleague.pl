<?php


namespace App\Http\Services;


use App\Models\Notification;

class TutorialService
{
    public static function notifyUser($tutorial)
    {
        $params = [
            'user_id'    => $tutorial->user_id,
            'created_at' => now(),
        ];

        if ($tutorial->status == 'passed') {
            $params['title']      = 'central.tutorial.response.accepted';
            $params['updated_at'] = now();
        }

        if ($tutorial->status == 'failed') {
            $params['content'] = 'central.tutorial.response.rejected';
            $params['updated_at'] = now();
        }

        if ($tutorial->status == 'pending') {
            $params['title'] = 'central.tutorial.response.pending';
            $params['updated_at'] = now();
        }

        Notification::insert([$params]);
    }
}
