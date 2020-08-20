<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'user_id',
        'notification'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
