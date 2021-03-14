<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserObserver
{
    public function creating(User $user) {

        DB::table('board_messages')->insert([
            'content' => 'Witamy na pokładzie'.$user->name.'!',
            'user_id' => User::max('id')+1
            ]);
    }
}
