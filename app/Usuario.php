<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'password', 'rol', 'grupo_id'];

    // Un usuario (si es estudiante) pertenece a un grupo
    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}
