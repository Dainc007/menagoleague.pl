<?php

namespace App\Observers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserObserver
{
    public function created(User $user)
    {   
        Message::insert([
            'title' => __('messages.boardMessages.accountCreated.title'),
            'content' => __('messages.boardMessages.accountCreated.content'),
            'from' => 1,
            'to' => $user->id
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
