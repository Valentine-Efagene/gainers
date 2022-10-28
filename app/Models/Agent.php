<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'account_number', 'account_name', 'bank', 'western_union_link'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
