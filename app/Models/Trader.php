<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trader extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'success_rate', 'roi'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
