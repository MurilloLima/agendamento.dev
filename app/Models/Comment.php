<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'comment',
        'file'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
