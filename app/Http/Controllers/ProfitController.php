<?php

namespace App\Http\Controllers;

use App\Models\Profit;
use Illuminate\Http\Request;

class ProfitController extends Controller
{
  public function create(Request $request)
  {
    $id = $request->id;
    return view('admin.profit', compact('id'));
  }

  /**
   * Store a profit: (POST)
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function store(Request $request)
  {
    $request->validate([
      'id' => ['required'],
      'profit_amount' => ['numeric'],
      'profit_description' => ['string'],
      'bonus_description' => ['string'],
      'bonus_amount' => ['numeric'],
    ]);
    $profit = new Profit;
    $profit->deposit_id = $request->id;
    $profit->profit_amount = $request->profit_amount;
    $profit->profit_description = $request->profit_description;
    $profit->bonus_amount = $request->bonus_amount;
    $profit->bonus_description = $request->bonus_description;
    $profit->save();
    return redirect('admin.deposits');
  }
}
