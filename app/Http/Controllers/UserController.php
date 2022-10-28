<?php

namespace App\Http\Controllers;

use App\Models\Trader;
use App\Models\User;
use App\Models\UserAgent;
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
        $this->middleware('auth', [
            'only' => [
                'update'
            ]
        ]);

        $this->middleware('admin_auth', [
            'only' => [
                'index', 'delete', 'setTrader'
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
        $traders = Trader::all();
        return view('admin.total_users', compact('users', 'traders'));
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => ['required'],
        ]);

        User::find($request->id)->delete();
        return back();
    }

    public function setTrader(Request $request)
    {
        $request->validate([]);
        User::where('id', $request->user_id)->update(['trader_id' => $request->trader_id]);
        return back();
    }

    public function setAgent(Request $request)
    {
        $request->validate([
            'user_id' => ['string'],
            'agent_id' => ['string'],
        ]);
        $userAgent = new UserAgent;
        $userAgent->user_id = $request->user_id;
        $userAgent->agent_id = $request->agent_id;
        $ret = $userAgent->save();
        $success = $ret ? true : false;
        return back()->with(compact('success'));
    }

    public function stripEmptyCustom($data)
    {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                unset($data[$key]);
            }
        }

        return $data;
    }

    /**
     * Paginate all users
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            'email' => ['string', 'email', 'max:255', 'unique:users', 'nullable', 'sometimes'],
            'phone_number' => ['string', 'max:20', 'nullable', 'sometimes'],
        ]);
        if ($request->file('profile_photo')) {
            $data['profile_photo'] = $request->file('profile_photo')->store('uploads', 'public');
        }
        $data = $this->stripEmptyCustom($data);
        //dd($data);
        User::where('id', auth()->id())->update($data);
        return back();
    }
}
