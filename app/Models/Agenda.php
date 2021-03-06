<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'user_id',
        'status',
        'data_consulta',
        'horario',
        'content'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
        # code...
    }
}
