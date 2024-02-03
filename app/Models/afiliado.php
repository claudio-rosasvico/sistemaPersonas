<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class afiliado extends Model
{
    use HasFactory;

    protected $table = 'afiliados';
    protected $fillable = ['id', 'DNI', 'genero', 'nombre_apellido', 'domicilio', 'seccion', 'circuito'];
}
