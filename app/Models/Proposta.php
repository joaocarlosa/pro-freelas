<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    use HasFactory;

    public function autor()
    {
        return $this->belongsTo(User::class,'autor_id', 'id');
    }

    public function projeto()
    {
        return $this->belongsTo(Projeto::class,'projeto_id', 'id');
    }
}
