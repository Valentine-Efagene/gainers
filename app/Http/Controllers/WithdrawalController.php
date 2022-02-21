<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $balance = Auth::user()->deposit->sum('amount') - Auth::user()->withdrawal->sum('amount');

        $request->validate([
            'wallet_id' => ['string'],
            'amount' => ['required', 'numeric', function ($attribute, $value, $fail) use ($balance) {
                if ($value > $balance) {
                    $fail('Amount exceeds your balance of ' . $balance . '.');
                }
            },]
        ]);

        $withdrawal = new Withdrawal;
        $withdrawal->user_id = auth()->id();
        $withdrawal->token = $request->token;
        $withdrawal->wallet_id = $request->wallet_id;
        $withdrawal->amount = $request->amount;
        $withdrawal->wallet_qpr = $request->file('wallet_qpr')->store('uploads', 'public');

        $ret = $withdrawal->save();
        $success = $ret ? true : false;
        return view('withdrawal', compact('success'));
    }
}
