<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\User;
use App\Services\AccountService;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * @var AccountService
     */
    protected $accountService;

    /**
     *
     * @param AccountService $accountService
     *
     */

    public function __construct(AccountService $accountService)
    {
        $this->middleware('auth');
        $this->accountService = $accountService;
    }

    public function index()
    {
        return view('user.account', [
            'personal_data' => auth()->user()
        ]); 

       
    }

    public function update(AccountRequest $request)
    {
        $this->accountService->updateAccount($request->validated());

        return back();
    }
}
