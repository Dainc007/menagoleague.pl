<?php

namespace App\Http\Services;

use App\Models\Transfer;
use Exception;
use Illuminate\Http\Client\Request;

class TransferService
{

    public function buy(Request $request)
    {
        new Transfer($request->validated());
    }

    public function process(Request $request)
    {
        $action = $this->checkAction($request['action']);

    }

    private function checkAction(string $action)
    {
        if ($action == 'buy') {
            //
        } elseif ($action == 'loan') {
            //
        } elseif ($action == 'sign') {
            //
        } else {
            throw new Exception('Wrong Action');
        }

        return $action;
    }
}
