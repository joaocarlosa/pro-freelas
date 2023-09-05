<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario_id',
        'projeto_id',
        'tipo',
    ];

    public $table = "notificacoes";

    public function projeto()
    {
        return $this->belongsTo(Projeto::class,'projeto_id', 'id');
    }
}
