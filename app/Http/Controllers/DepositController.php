<?php

namespace App\Http\Controllers;

use App\Models\Bonus;
use App\Models\Deposit;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
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

    /**
     * Paginate all deposits
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $deposits = Deposit::paginate(10);
        return view('admin.deposits', compact('deposits'));
    }

    public function create()
    {
        $wallets = Wallet::all();
        $deposits = Auth::user()->deposit->sortByDesc('id');
        return view('deposit', compact('deposits', 'wallets'));
    }

    /**
     * Store a deposit: (POST)
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'plan' => ['required'],
            'wallet' => [],
            'amount' => ['required', 'numeric', function ($attribute, $value, $fail) {
                if ($value < 500) {
                    $fail('Insufficient deposit. If you have already made the payment, please contact our customer support.');
                }
            },]
        ]);
        $deposit = new Deposit;
        $deposit->user_id = auth()->id();
        $deposit->plan = $request->plan;
        $deposit->amount = $request->amount;
        $deposit->wallet = $request->wallet;

        if (
            $deposit->plan == Deposit::BASIC ||
            $deposit->plan == Deposit::BRONZE ||
            $deposit->plan == Deposit::SILVER ||
            $deposit->plan == Deposit::DIAMOND ||
            $deposit->plan == Deposit::PREMIUM
        ) {
            if ($deposit->amount >= 500 && $deposit->amount <= 1000) {
                $deposit->plan = Deposit::BASIC;
            } elseif ($deposit->amount >= 1001 && $deposit->amount <= 2000) {
                $deposit->plan = Deposit::BRONZE;
            } elseif ($deposit->amount >= 2001 && $deposit->amount <= 3000) {
                $deposit->plan = Deposit::BRONZE;
            } elseif ($deposit->amount >= 3001 && $deposit->amount <= 5000) {
                $deposit->plan = Deposit::SILVER;
            } elseif ($deposit->amount > 5000) {
                $deposit->plan = Deposit::BRONZE;
            }
        }

        if ($request->file('proof')) {
            $deposit->proof = $request->file('proof')->store('uploads', 'public');
        }

        $ret = $deposit->save();

        $user = Auth::user();
        if ($user->referrer) {
            $referrer = User::find($user->referrer);
            $bonus = new Bonus;
            $bonus->user_id = $request->id;
            $bonus->amount = $request->amount * 0.05;
            $bonus->description = 'Referral bonus from ' . $user->first_name . $user->last_name;
            $bonus->save();
        }

        $success = $ret ? true : false;
        return view('deposit', compact('success'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => ['required'],
            'status' => ['string', 'required']
        ]);
        $deposit = Deposit::find($request->id);

        if ($request->status) {
            $deposit->status = $request->status;
        }

        $deposit->update();
        return back();
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => ['required'],
        ]);

        Deposit::find($request->id)->delete();
        return back();
    }
}
