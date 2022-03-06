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
            Token::where('user_id', auth()->id())->update(['token' => $request->token]);
        }

        if ($request->password) {
            User::where('id', auth()->id())->update(['password' => Hash::make($request->password)]);
        }

        if ($request->username) {
            User::where('id', auth()->id())->update(['username' => $request->username]);
        }

        return back();
    }
}
