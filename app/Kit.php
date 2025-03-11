<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    //un kit puede estar en muchos cursos
    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }
}
