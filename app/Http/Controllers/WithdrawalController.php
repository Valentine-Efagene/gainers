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
        $this->middleware('auth', [
            'only' => [
                'store'
            ]
        ]);

        $this->middleware('admin_auth', [
            'only' => [
                'index'
            ]
        ]);
    }

    public function index()
    {
        $withdrawals = Withdrawal::paginate(10);
        return view('admin.withdrawals', compact('withdrawals'));
    }

    public function store(Request $request)
    {
        $balance = Auth::user()->deposit->sum('amount') + Auth::user()->profit->sum('bonus_amount') + Auth::user()->profit->sum('profit_amount') - Auth::user()->withdrawal->sum('amount');

        $request->validate([
            'wallet_id' => ['string'],
            'wallet_type' => ['string'],
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

        if ($request->file('wallet_qpr')) {
            $withdrawal->wallet_qpr = $request->file('wallet_qpr')->store('uploads', 'public');
        }

        $ret = $withdrawal->save();
        $success = $ret ? true : false;
        return view('withdrawal', compact('success'));
    }
}
