<?php

namespace App\Http\Controllers;
use App\Models\FakeTransaction;
use Faker\Factory as Faker;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $recent_deposits = FakeTransaction::where('type', 'deposit')->latest()->take(5)->get();
        // $recent_withdrawals = FakeTransaction::where('type', 'withdrawal')->latest()->take(5)->get();
        $faker = Faker::create();
        $paymentMethods = ['Bitcoin', 'Ethereum', 'Transfer'];
        $round_factor = 5;

        $recent_deposits = [];
        for ($i=0; $i < 10; $i++) { 
            array_push($recent_deposits, [
                //'payment_method' => $faker->boolean() ? 'bitcoin' : 'ethereum',
                'payment_method' => $paymentMethods[rand(0, 2)],
                'name' => $faker->name(),
                'amount' => intdiv($faker->numberBetween($min = 50, $max = 800), $round_factor) * $round_factor,
            ]);
        }

        $recent_withdrawals = [];
        for ($i=0; $i < 10; $i++) { 
            array_push($recent_withdrawals, [
                'payment_method' => $paymentMethods[rand(0, 2)],
                'name' => $faker->name(),
                'amount' => intdiv($faker->numberBetween($min = 50, $max = 800), $round_factor) * $round_factor,
            ]);
        }
        return view('home', compact('recent_deposits', 'recent_withdrawals'));
    }
}
