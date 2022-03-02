<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $active_profit = Auth::user()->profit->sum('profit_amount');
        $active_equity = Auth::user()->deposit->sum('amount') + Auth::user()->profit->sum('bonus_amount') + $active_profit;
        $total_withdrawal = Auth::user()->withdrawal->sum('amount');
        $balance = $active_equity - $total_withdrawal;
        return view('dashboard', compact('balance', 'active_equity', 'total_withdrawal', 'balance', 'active_profit'));
    }

    public function activities()
    {
        $withdrawals = Auth::user()->withdrawal;
        $deposits = Auth::user()->deposit;
        $activities = collect();

        foreach ($withdrawals as $withdrawal) {
            $activity = new Activity;
            $activity->type = 'WITHDRAWAL';
            $activity->id = $withdrawal->id;
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
