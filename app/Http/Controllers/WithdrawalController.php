<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
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
                'store', 'create'
            ]
        ]);

        $this->middleware('admin_auth', [
            'only' => [
                'index', 'update', 'delete'
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
        $active_profit = Auth::user()->profit->sum('amount');
        $bonus = Auth::user()->bonus->sum('amount');
        $deposit = Auth::user()->deposit->where('status', Deposit::APPROVED)->sum('amount');
        $active_equity = $deposit + $active_profit + $bonus;
        $total_withdrawal = Auth::user()->withdrawal->where('status', Withdrawal::APPROVED)->sum('amount');
        $balance = $active_equity - $total_withdrawal;

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
        return back()->with(compact('success'));
    }

    public function create()
    {
        $withdrawals = Auth::user()->withdrawal->sortByDesc('created_at');
        return view('withdrawal', compact('withdrawals'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => ['required'],
            'status' => ['string', 'required']
        ]);
        $withdrawal = Withdrawal::find($request->id);

        if ($request->status) {
            $withdrawal->status = $request->status;
        }

        $withdrawal->update();
        return back();
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => ['required'],
        ]);

        Withdrawal::find($request->id)->delete();
        return back();
    }
}
