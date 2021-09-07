<?php

namespace App\Http\Requests;

use App\Models\Player;
use App\Models\Team;
use App\Models\Transfer;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'transferFee'       => 'integer|min:1|max:' . Team::MONEY,
            'loanFee'           => 'integer|min:0|max:' . Team::MONEY,
            'salary'            => 'integer|min:' . Player::WAGE . '|max:' . Team::MONEY,
            'nextTransferFee'   => 'integer|in:' . implode(',', Transfer::AVAILABLE_NEXT_FEES),
            'extraPlayer'       => 'integer|in:' . implode(',', Player::all()->pluck('id')->toArray()),
            'cancelFee'         =>  'integer|min:0|max:' . Team::MONEY,
        ];
    }
}
