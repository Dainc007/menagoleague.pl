<?php

namespace App\Menagoleague\Account\Services;


use App\Menagoleague\Account\Repositories\AccountRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;

class AccountService
{
    /**
     * @var $accountRepository
     */
    protected $accountRepository;

    /**
     * AccountService constructor.
     *
     * @param AccountRepository $accountRepository
     */
    public function __construct(AccountRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }

    /**
     * Update account data
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function updateAccount($data, int $id)
    {

        DB::beginTransaction();

        try {
            $user = $this->accountRepository->updateAccount($data, $id);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Unable to update user data');
        }

        DB::commit();

        return $user;

    }
}