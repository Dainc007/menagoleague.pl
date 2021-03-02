<?php

namespace App\Repositories;

use App\Models\User;

class AccountRepository
{
    /**
     * @var User
     */
    protected $user;

    /**
     * AccountRepository constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Update User data
     *
     * @param $data
     * @return User
     */
    public function updateAccount($data, $id)
    {
            
        $user = $this->user->find($id);

        if(!empty($data['discord']))
        {
            $user->discord = $data['discord'];
        }

        if(!empty($data['facebook']))
        {
            $user->discord = $data['facebook'];
        }

        $user->save();

        return $user;
    }

}