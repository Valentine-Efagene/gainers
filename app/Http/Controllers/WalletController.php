<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        $wallets = Wallet::all();
        return view('admin.system_wallet', compact('wallets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => ['nullable', 'string'],
            'name' => ['required', 'string'],
            'acronym' => ['nullable', 'string'],
        ]);

        $wallet = new Wallet;

        $wallet->name = $request->name;
        $wallet->address = $request->address;
        $wallet->acronym = $request->acronym;

        if ($request->file('qr_code')) {
            $wallet->qr_code = $request->file('qr_code')->store('uploads', 'public');
        }

        $ret = $wallet->save();
        $success = $ret ? true : false;
        return back()->with(compact('success'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'address' => [],
            'qr_code' => [],
            'name' => [],
            'id' => ['required'],
            'acronym' => [],
        ]);

        $wallet = Wallet::find($request->id);

        if ($request->name) {
            $wallet->name = $request->name;
        }

        if ($request->address) {
            $wallet->address = $request->address;
        }

        if ($request->acronym) {
            $wallet->acronym = $request->acronym;
        }

        if ($request->file('qr_code')) {
            $wallet->qr_code = $request->file('qr_code')->store('uploads', 'public');
        }

        $ret = $wallet->update();
        $success = $ret ? true : false;
        return back()->with(compact('success'));
    }
}
