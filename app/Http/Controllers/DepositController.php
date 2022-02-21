<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;

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

    /**
     * Store a deposit: (POST)
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => ['numeric']
        ]);
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
