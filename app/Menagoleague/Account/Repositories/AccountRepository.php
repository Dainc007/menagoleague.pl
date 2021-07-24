<?php

namespace App\Menagoleague\Account\Repositories;

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
    public function updateAccount($data, int $id)
    {
            
        $user = $this->user->find($id);

        if(!empty($data['discord']))
        {
            $user->discord = $data['discord'];
        }

        if(!empty($data['facebook']))
        {
            $user->facebook = $data['facebook'];
        }

        $user->save();

        return $user;
    }

}