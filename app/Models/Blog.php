<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'desc',
        'content',
        'img',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
