<?php

namespace App\Http\Controllers;

use App\Models\Success;
use Illuminate\Http\Request;

class SuccessController extends Controller
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
                'create', 'store'
            ]
        ]);
    }

    public function index()
    {
        $success_rates = Success::all()->sortByDesc('id')->take(11);
        $s = [];

        foreach ($success_rates as $success_rate) {
            array_push($s, $success_rate);
        }

        return $s;
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => [],
            'success_rate' => ['numeric', 'required'],
        ]);

        $success = new Success;
        $success->success_rate = $request->success_rate;

        if ($request->date) {
            $success->date = $request->date;
        }

        $success->save();

        return back();
    }

    public function create()
    {
        return view('admin.success');
    }
}
