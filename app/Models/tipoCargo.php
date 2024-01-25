<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoCargo extends Model
{
    use HasFactory;

    protected $table = 'tipo_cargos';
    protected $fillable = ['id', 'nombre'];

    public function cargo(){
        return $this->hasMany(cargoPersona::class, 'id_tipo_cargo');
    }
}
