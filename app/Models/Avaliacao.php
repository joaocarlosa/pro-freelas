<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    public $table = "avaliacoes";

    public function autor()
    {
        return $this->belongsTo(User::class,'autor_id', 'id');
    }
}
