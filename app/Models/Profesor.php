<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
USE App\Models\Modulo;
class Profesor extends Model
{
    use HasFactory;
    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }
}
