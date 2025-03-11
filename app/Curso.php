<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'caratula', 'contenido', 'kit_id'];

    //un curso tiene un kit de robótica
    public function kit()
    {
        return $this->belongsTo(Kit::class);
    }

    //un curso puede pertenecer a muchos grupos
    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'grupo_curso');
    }
}
