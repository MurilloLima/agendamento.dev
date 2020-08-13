<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Retirar extends Model
{
    protected $fillable = [
        'value',
        'hash',
        'user_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
