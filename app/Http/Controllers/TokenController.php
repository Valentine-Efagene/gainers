<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([]);
        dd($request);
        return view('admin.token');
    }
}
