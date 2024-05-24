<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno;


class Modulo extends Model
{
    use HasFactory;
    
    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }

    public function profesores()
    {
        return $this->hasMany(Profesor::class);
    }
}
