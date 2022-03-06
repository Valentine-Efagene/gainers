<?php

namespace App\Http\Controllers;

use App\Models\Bonus;
use Illuminate\Http\Request;

class BonusController extends Controller
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
                'update'
            ]
        ]);

        $this->middleware('admin_auth', [
            'only' => [
                'index', 'delete'
            ]
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => ['string'],
            'amount' => ['required', 'string']
        ]);
        $bonus = new Bonus;
        $bonus->description = $request->description;
        $bonus->amount = $request->amount;
        $bonus->save();
        return back();
    }
}
