<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->file('proof'));
        $request->validate([]);
        $deposit = new Deposit;
        $deposit->user_id = auth()->id();
        $deposit->plan = $request->plan;
        $deposit->amount = $request->amount;
        $deposit->proof = $request->file('proof')->store('uploads', 'public');
        $ret = $deposit->save();
        $success = $ret ? true : false;
        return view('deposit', compact('success'));
    }
}
