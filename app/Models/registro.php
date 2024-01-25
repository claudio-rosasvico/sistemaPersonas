<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    use HasFactory;
    
    protected $table = 'registros';
    protected $fillable = [ 'id', 'id_persona', 'id_categoria', 'fecha', 'titulo', 'descripcion', 'fuente', 'id_user'];

    public function persona(){
        return $this->belongsTo(persona::class, 'id_persona');
    }

    public function asociado(){
        return $this->hasMany(asociado::class, 'id_registro');
    }

    public function categoria(){
        return $this->belongsTo(categoriaRegistro::class, 'id_categoria');
    }
}
