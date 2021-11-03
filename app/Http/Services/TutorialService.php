<?php


namespace App\Http\Services;


use App\Models\Notification;

class TutorialService
{
    public static function notifyUser($tutorial)
    {
        $params = [
            'user_id'  => $tutorial->user_id
        ];

        if ($tutorial->status == 'passed') {
            $params += [
                'content' => 'central.tutorial.response.accepted'
            ];
        }

        if ($tutorial->status == 'rejected') {
            $params += [
                'content' => 'central.tutorial.response.rejected'
            ];
        }

        Notification::insert([$params]);
    }
}
