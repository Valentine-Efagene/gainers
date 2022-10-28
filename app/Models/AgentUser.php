<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentUser extends Model
{
    use HasFactory;
    protected $table = 'agent_user';

    protected $fillable = ['user_id', 'agent_id'];
}
