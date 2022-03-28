<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class EmailController extends Controller
{
    public function welcome()
    {
        Mail::to(Auth::user()->email)->send(new Welcome(Auth::user()->name));

        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again later');
        } else {
            return redirect('/dashboard');
            // return response()->json('Yes, You have sent email from LARAVEL !!');
        }
    }
}
