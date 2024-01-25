<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoriaRegistro extends Model
{
    use HasFactory;

    protected $table = 'categoria_registros';
    protected $fillable = ['id', 'nombre', 'descripcion'];

    public function registro(){
        return $this->hasMany(registro::class, 'id_categoria');
    }
    
}
