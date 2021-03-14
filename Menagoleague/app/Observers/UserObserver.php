<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserObserver
{
    public function creating(User $user)
    {

        DB::table('board_messages')->insert([
            'content' => 'Witamy na pokładzie' . $user->name . '!',
            'user_id' => $user->id
        ]);
    }

    public function updating(User $user)
    {

        if ($user->isDirty('team_id')) {
            // user changed team his team
            DB::table('board_messages')->insert([
                'content' => 'Witamy W druzynie ' . $user->name . '!',
                'user_id' => $user->id
            ]);
        }
    }
}
