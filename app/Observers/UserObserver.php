<?php

namespace App\Observers;

use App\Models\Message;
use App\Models\Notification;
use App\Models\User;

class UserObserver
{
    public function created(User $user)
    {
        Notification::insert([
            'title'   => 'notification.accountCreated.title',
            'content' => 'notification.accountCreated.content',
            'user_id' => $user->id,
        ]);
    }

    public function updating(User $user)
    {

      /*   if ($user->isDirty('team_id')) {
            // user changed team his team
            DB::table('messages')->insert([
                'content' => 'Witamy W druzynie ' . $user->name . '!',
                'user_id' => $user->id
            ]);
        } */
    }
}
