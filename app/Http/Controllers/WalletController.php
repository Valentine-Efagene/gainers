<?php

namespace App\Http\Controllers;

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

        if ($request->bitcoin_wallet_id) {
            $wallet->bitcoin_wallet_id = $request->bitcoin_wallet_id;
        }

        if ($request->file('bitcoin_wallet_qpr_code')) {
            $wallet->bitcoin_wallet_qpr_code = $request->file('bitcoin_wallet_qpr_code')->store('uploads', 'public');
        }

        if ($request->bnb_wallet_id) {
            $wallet->bnb_wallet_id = $request->bnb_wallet_id;
        }

        if ($request->file('bnb_wallet_qpr_code')) {
            $wallet->bnb_wallet_qpr_code = $request->file('bnb_wallet_qpr_code')->store('uploads', 'public');
        }

        //dd($wallet);
        $ret = $wallet->update();
        $success = $ret ? true : false;
        return view('admin.system_wallet', compact('success'));
    }
}
