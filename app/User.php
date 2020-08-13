<?php

namespace App;

use App\Models\Balance;
use App\Models\Blog;
use App\Models\Deposito;
use App\Models\Historic;
use App\Models\Plano;
use App\Models\Retirar;
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
        'name', 'email', 'password', 'role', 'fone', 'cpf','plano_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function balance()
    {
        return $this->hasOne(Balance::class);
    }

    public function historics()
    {
        return $this->hasMany(Historic::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function plano()
    {
        return $this->hasOne(Plano::class, 'id');
    }

    public function depositos()
    {
        return $this->hasMany(Deposito::class);
    }

    public function retiradas()
    {
        return $this->hasMany(Retirar::class);
    }

}
