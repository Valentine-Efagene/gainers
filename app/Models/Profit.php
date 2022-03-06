<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profit extends Model
{
    use HasFactory;

    protected $fillable = ['deposit_id', 'amount', 'description'];

    public function deposit()
    {
        return $this->belongsTo(Deposit::class);
    }
}
