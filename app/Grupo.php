<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    // Un grupo tiene muchos usuarios (estudiantes)
    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }

    //un grupo puede tener muchos cursos
    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'grupo_curso');
    }
}
