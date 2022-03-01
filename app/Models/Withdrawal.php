<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    const PENDING = 'PENDING';
    const APPROVED = 'APPROVED';
    const DECLINED = 'DECLINED';
    const TERMINATED = 'TERMINATED';
    const EXPIRED = 'EXPIRED';

    use HasFactory;
    protected $fillable = ['user_id', 'amount', 'token', 'status', 'wallet_id', 'wallet_id', 'wallet_qpr'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
