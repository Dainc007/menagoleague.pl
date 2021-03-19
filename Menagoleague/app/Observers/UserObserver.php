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
            'title' => 'Witaj!',
            'content' => 'Witamy na pokładzie' . $user->name . '!',
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
