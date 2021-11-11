<?php


namespace App\Http\Services;


use App\Models\Notification;

class NotificationService
{
    public static function notifyUser($data)
    {
        Notification::insert([
            'data'         => ['name' => $data->name],
            'content' => 'messages.boardMessages.accountCreated.content',
            'user_id' => $data->id,
            'created_at' => now(),
        ]);
    }
}