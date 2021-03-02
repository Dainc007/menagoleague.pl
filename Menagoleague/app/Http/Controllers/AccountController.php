<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Services\AccountService;
use Exception;
use Illuminate\Http\Request;


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
        return view('user.account', ['personal_data' => auth()->user()]);
    }

    public function update(AccountRequest $request, $id)
    {
        $this->accountService->updateAccount($request->validated(), $id);

        return back();
    }

}
