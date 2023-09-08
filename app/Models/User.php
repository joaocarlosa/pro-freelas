<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'password',
        'profile',
        'sexo',
        'descricao',
        'phone',
        'texmpo_xp',
        'country',
        'foto'
    ];
    protected $guarded=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function meusProjetos()
    {
        return $this->hasMany(Projeto::class,'autor_id');
    }

    function getEspecialidades()
    {
        return explode(',',$this->especialidades);
    }

    function getHabilidades()
    {
        return explode(',',$this->habilidades);
    }
}
