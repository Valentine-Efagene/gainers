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
        $this->middleware('admin_auth', [
            'only' => [
                'store', 'create'
            ]
        ]);
    }

    public function create(Request $request)
    {
        $id = $request->id;
        return view('admin.bonus', compact('id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required'],
            'description' => ['string'],
            'amount' => ['required']
        ]);
        $bonus = new Bonus;
        $bonus->user_id = $request->user_id;
        $bonus->description = $request->description;
        $bonus->amount = $request->amount;
        $bonus->save();
        return back();
    }
}
