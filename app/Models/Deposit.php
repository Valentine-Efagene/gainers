<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    // PLANS
    const BASIC = 'BASIC';
    const BRONZE = 'BRONZE';
    const SILVER = 'SILVER';
    const DIAMOND = 'DIAMOND';
    const PREMIUM = 'PREMIUM';
    const CRYPTOCURRENCIES = 'CRYPTOCURRENCIES';
    const STOCKS = 'STOCKS';
    const CUSTOM = 'CUSTOM';

    // STATUS
    const PENDING = 'PENDING';
    const APPROVED = 'APPROVED';
    const DENIED = 'DENIED';
    const TERMINATED = 'TERMINATED';


    use HasFactory;

    protected $fillable = ['user_id', 'amount', 'plan', 'status', 'proof'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ReferralBonus()
    {
        return $this->hasOne(ReferralBonus::class);
    }

    public function SignupBonus()
    {
        return $this->hasOne(ReferralBonus::class);
    }

    public function profit()
    {
        return $this->hasMany(Profit::class);
    }
}
