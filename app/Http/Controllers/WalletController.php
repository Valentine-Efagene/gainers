<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'bitcoin_wallet_id' => ['nullable', 'string'],
            'bnb_wallet_id' => ['nullable', 'string'],
        ]);

        $wallet = Wallet::firstOrNew(['id' => 1]);
        $wallet->bitcoin_wallet_id = $request->bitcoin_wallet_id;

        if ($request->file('bitcoin_wallet_qpr_code')) {
            $wallet->bitcoin_wallet_qpr_code = $request->file('bitcoin_wallet_qpr_code')->store('uploads', 'public');
        }

        $wallet->bnb_wallet_id = $request->bnb_wallet_id;

        if ($request->file('bnb_wallet_qpr_code')) {
            $wallet->bnb_wallet_qpr_code = $request->file('bnb_wallet_qpr_code')->store('uploads', 'public');
        }

        $ret = $wallet->save();
        $success = $ret ? true : false;
        return view('admin.system_wallet', compact('success'));
    }
}
