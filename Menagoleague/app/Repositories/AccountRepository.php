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
    public function update($data, $id)
    {
            
        $user = $this->user->find($id);

        $user->discord = $data['discord'];
        $user->facebook = $data['facebook'];
        $user->device = $data['device'];

        $user->update();

        return $user;
    }

}