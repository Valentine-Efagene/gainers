<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'bitcoin_wallet_id',
        'bitcoin_wallet_qpr_code',
        'bnb_wallet_id',
        'bnb_wallet_qpr_code'
    ];
}
