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
      'deposit_id' => ['required'],
      'amount' => ['numeric'],
      'description' => ['string'],
    ]);
    $profit = new Profit;
    $profit->deposit_id = $request->deposit_id;
    $profit->amount = $request->amount;
    $profit->description = $request->description;
    $profit->save();

    return redirect('admin/deposits');
  }
}
