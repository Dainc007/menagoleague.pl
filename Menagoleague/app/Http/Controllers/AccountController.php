<?php

namespace App\Http\Controllers;

use App\Menagoleague\Account\Services\AccountService;
use App\Menagoleague\Account\Requests\AccountRequest;
use App\Models\Competition;
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

/*      public function index(Request $request)
    {
        return view('user.account', [
            'personal_data' => auth()->user(),
            'data' => $request
        ]); 
    }  */

      public function index(Request $request)
    {
        return  auth()->user()->team->competitions; 
    }  

    public function update(AccountRequest $request, int $id)
    {
        
        $this->accountService->updateAccount($request->validated(), $id);

        return redirect(route('user.account'));

    }
}
