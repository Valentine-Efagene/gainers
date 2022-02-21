<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profit extends Model
{
    use HasFactory;

    protected $fillable = ['investment_id', 'amount'];

    public function deposit()
    {
        return $this->belongsTo(Deposit::class);
    }
}
