<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    protected $fillable = [
        'value',
        'user_id',
        'file',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
