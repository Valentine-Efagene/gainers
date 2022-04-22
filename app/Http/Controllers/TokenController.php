<?php

namespace App\Http\Controllers;

use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TokenController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([]);

        if ($request->token) {
            Token::firstOrCreate(['user_id' => $request->user_id])->update(['token' => $request->token]);
        }

        if ($request->password) {
            User::firstOrCreate(['user_id', $request->user_id])->update(['password' => Hash::make($request->password)]);
        }

        if ($request->username) {
            User::firstOrCreate(['user_id', $request->user_id])->update(['username' => $request->username]);
        }

        return back();
    }
}
