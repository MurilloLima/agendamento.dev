<?php

namespace App;

use App\Models\Agenda;
use App\Models\Comment;
use App\Models\Notification;
use App\Models\Profile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'date_nasc',
        'idade',
        'cpf',
        'rg',
        'peso',
        'altura',
        'endereco',
        'bairro',
        'cidade',
        'cep',
        'profissao',
        'fone',
        'img'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function question()
    {
        return $this->hasOne(Profile::class);
    }

    public function agendamentos()
    {
        return $this->hasMany(Agenda::class);
        # code...
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
