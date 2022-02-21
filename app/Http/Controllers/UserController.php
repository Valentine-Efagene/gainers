<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth', [
            'only' => [
                'store'
            ]
        ]);*/

        $this->middleware('admin_auth', [
            'only' => [
                'index'
            ]
        ]);
    }

    /**
     * Paginate all users
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.total_users', compact('users'));
    }
}
