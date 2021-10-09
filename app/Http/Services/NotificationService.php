<?php


namespace App\Http\Services;


use App\Models\Notification;

class NotificationService
{
    public static function notifyUser($data)
    {
        Notification::insert([
            'data'         => ['name' => $data->name],
            'message_path' => 'messages.boardMessages.accountCreated.content',
            'user_id' => $data->id
        ]);
    }
}