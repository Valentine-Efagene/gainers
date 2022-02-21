<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Illuminate\Http\Request;

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
        $request->validate([]);
        $withdrawal = new Withdrawal;
        $withdrawal->user_id = auth()->id();
        $withdrawal->plan = $request->plan;
        $withdrawal->amount = $request->amount;
        $withdrawal->proof = $request->file('proof')->store('uploads', 'public');
        $ret = $withdrawal->save();
        $success = $ret ? true : false;
        return view('withdrawal', compact('success'));
    }
}
