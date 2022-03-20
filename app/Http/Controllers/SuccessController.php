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
        $sucess = Success::all();
        return $sucess;
    }
}
