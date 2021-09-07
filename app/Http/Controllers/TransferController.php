<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransferRequest;
use App\Models\Player;
use App\Models\Transfer;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $type = 'transferListed')
    {
        return view('transfers.transfers', [
            'user'          => Auth::user(),
            'transferList'  => Player::getTransferListedPlayers(),
            'freeAgentList' => Player::getFreeAgents(),
            'loanList'      => Player::getLoanListedPlayers(),
            'roles'         => Player::AVAILABLE_ROLES,
            'goals'         => Player::getAvailableGoals(),
            'type'          => $type,
            'nextFees'      => Transfer::AVAILABLE_NEXT_FEES,
        ]);
    }

    /**
     * Show the form for negotiate a new deal.
     *
     * @return \Illuminate\Http\Response
     */
    public function negotiate(string $type, string $recipient, int $player_id)
    {
        $action = $this->checkType($type);

        return view("transfers.negotiation", [
            'user'     => Auth::user(),
            'roles'    => Player::AVAILABLE_ROLES,
            'goals'    => Player::getAvailableGoals(),
            'nextFees' => Transfer::AVAILABLE_NEXT_FEES,
            'action'   => $action,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransferRequest $request)
    {
         (new Transfer($request->validated()))->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function show(Transfer $transfer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $transfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transfer $transfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transfer $transfer)
    {
        //
    }

    private function checkType(string $type): string
    {
        if ($type == 'loanListed') {
            $action = 'loan';
        } elseif ($type == 'transferListed') {
            $action = 'buy';
        } else {
            $action = 'sign';
        }

        return $action;
    }
}
