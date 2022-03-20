<?php

namespace App\Http\Controllers;

use App\Models\Trader;
use Illuminate\Http\Request;

class TraderController extends Controller
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
                'index', 'update', 'store'
            ]
        ]);
    }

    public function index()
    {
        $traders = Trader::all();
        return view('admin.trader_stat', compact('traders'));
    }

    public function store(Request $request)
    {
        $request->validate([]);
        dd($request->request);
        $trader = new Trader;
        $trader->name = $request->name;
        $trader->roi = $request->roi;
        $trader->success_rate = $request->success_rate;
        $trader->save();

        return back();
    }

    public function update(Request $request)
    {
        $request->validate([]);
        dd($request->request);
        $trader = Trader::find($request->id);

        if ($request->roi) {
            $trader->roi = $request->roi;
        }

        if ($request->name) {
            $trader->name = $request->name;
        }

        if ($request->sucess_rate) {
            $trader->success_rate = $request->success_rate;
        }

        $trader->update();

        return back();
    }
}
