<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
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
        $wallet = Wallet::find(1);
        $deposits = Auth::user()->deposit->sortByDesc('id');
        return view('deposit', compact('deposits', 'wallet'));
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

        if ($request->file('proof')) {
            $deposit->proof = $request->file('proof')->store('uploads', 'public');
        }

        $ret = $deposit->save();
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
