<?php

namespace App\Http\Controllers;

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

    public function update(Request $request, $id)
    {
        $data = $request->only([
            'facebook',
            'discord'
        ]);

        $result = ['status' => 200];

        try {
            $result['data'] = $this->accountService->updateAccount($data, $id);

        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result, $result['status']);

    }

}
