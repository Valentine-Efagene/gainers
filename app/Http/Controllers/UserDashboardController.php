<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Bonus;
use App\Models\Deposit;
use App\Models\Trader;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $active_profit = Auth::user()->profit->sum('amount');
        $bonus = Auth::user()->bonus->sum('amount');
        $deposit = Auth::user()->deposit->where('status', Deposit::APPROVED)->sum('amount');
        $active_equity = $deposit + $active_profit + $bonus;
        $total_withdrawal = Auth::user()->withdrawal->where('status', Withdrawal::APPROVED)->sum('amount');
        $balance = $active_equity - $total_withdrawal;

        // Last 5 transactions
        $profits = Auth::user()->profit->sortByDesc('id')->take(5);
        //$withdrawals = Auth::user()->withdrawal;
        //$withdrawals = Withdrawal::where('user_id', Auth::user()->id)->latest()->take(5)->get();
        //$deposits = Deposit::where('user_id', Auth::user()->id)->latest()->take(5)->get();
        $withdrawals = Withdrawal::where('user_id', Auth::user()->id)->where('status', Deposit::APPROVED)->orWhere('status', Deposit::DECLINED)->latest()->take(5)->get();
        $deposits = Deposit::where('user_id', Auth::user()->id)->where('status', Deposit::APPROVED)->orWhere('status', Deposit::DECLINED)->latest()->take(5)->get();
        $bonuses = Bonus::where('user_id', Auth::user()->id)->latest()->take(5)->get();
        $transactions = collect();

        foreach ($withdrawals as $withdrawal) {
            $transaction = new Activity;
            $transaction->type = 'WITHDRAWAL';
            $transaction->id = $withdrawal->id;
            $transaction->wallet_id = $withdrawal->wallet_id;
            $transaction->wallet_qpr = $withdrawal->wallet_qpr;
            $transaction->amount = $withdrawal->amount;
            $transaction->created_at = $withdrawal->created_at;
            $transactions->add($transaction);
        }

        foreach ($deposits as $deposit) {
            $transaction = new Activity;
            $transaction->type = 'DEPOSIT';
            $transaction->id = $deposit->id;
            $transaction->status = $deposit->status;
            $transaction->plan = $deposit->plan;
            $transaction->amount = $deposit->amount;
            $transaction->created_at = $deposit->created_at;
            $transactions->add($transaction);
        }

        foreach ($bonuses as $bonus) {
            $transaction = new Activity;
            $transaction->type = 'BONUS';
            $transaction->id = $bonus->id;
            $transaction->description = $bonus->description;
            $transaction->amount = $bonus->amount;
            $transaction->created_at = $bonus->created_at;
            $transactions->add($transaction);
        }

        foreach ($profits as $profit) {
            $transaction = new Activity;
            $transaction->type = 'PROFIT';
            $transaction->id = $profit->id;
            $transaction->description = $profit->description;
            $transaction->amount = $profit->amount;
            $transaction->created_at = $profit->created_at;
            $transactions->add($transaction);
        }

        $traders = Trader::all();

        $transactions = $transactions->sortByDesc('created_at')->take(50);
        return view('dashboard', compact('balance', 'active_equity', 'total_withdrawal', 'balance', 'active_profit', 'transactions', 'traders'));
    }

    public function activities()
    {
        //$withdrawals = Auth::user()->withdrawal;
        // $deposits = Auth::user()->deposit;
        $withdrawals = Withdrawal::where('user_id', Auth::user()->id)->where('status', Deposit::APPROVED)->orWhere('status', Deposit::DECLINED)->latest()->take(5)->get();
        $deposits = Deposit::where('user_id', Auth::user()->id)->where('status', Deposit::APPROVED)->orWhere('status', Deposit::DECLINED)->latest()->take(5)->get();
        $activities = collect();

        foreach ($withdrawals as $withdrawal) {
            $activity = new Activity;
            $activity->type = 'WITHDRAWAL';
            $activity->id = $withdrawal->id;
            $activity->status = $withdrawal->status;
            $activity->amount = $withdrawal->amount;
            $activity->created_at = $withdrawal->created_at;
            $activities->add($activity);
        }

        foreach ($deposits as $deposit) {
            $activity = new Activity;
            $activity->type = 'DEPOSIT';
            $activity->id = $deposit->id;
            $activity->status = $deposit->status;
            $activity->plan = $deposit->plan;
            $activity->amount = $deposit->amount;
            $activity->created_at = $deposit->created_at;
            $activities->add($activity);
        }

        $activities = $activities->sortByDesc('created_at');
        return view('activities', compact('activities'));
    }
}
