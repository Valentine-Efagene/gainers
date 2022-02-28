<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profit extends Model
{
    use HasFactory;

    protected $fillable = ['deposit_id', 'profit_amount', 'profit_description', 'bonus_description', 'bonus_amount'];

    public function deposit()
    {
        return $this->belongsTo(Deposit::class);
    }
}
