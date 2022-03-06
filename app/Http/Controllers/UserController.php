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

    public function delete($id)
    {
        User::find($id)->delete();
        return back();
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
            'email' => [],
            'phone_number' => [],
            'profile_photo' => [],
        ]);
        if ($request->file('profile_photo')) {
            $data['profile_photo'] = $request->file('profile_photo')->store('uploads', 'public');
        }
        $data = $this->stripEmptyCustom($data);
        //dd($data);
        User::where('id', auth()->id())->update($data);
        return view('profile');
    }
}
