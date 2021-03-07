<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\User;
use App\Services\AccountService;
use Illuminate\Http\Request;
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

    public function index(Request $request)
    {
        return view('user.account', [
            'personal_data' => auth()->user(),
            'data' => $request
        ]); 

       
    }

    public function update(AccountRequest $request, int $id)
    {
        
        $this->accountService->updateAccount($request->validated(), $id);

        return redirect(route('user.account'));

    }
}
