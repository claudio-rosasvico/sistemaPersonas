<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nivelCargo extends Model
{
    use HasFactory;

    protected $table = 'nivel_cargos';
    protected $fillable = ['id', 'nombre'];

    public function cargo(){
        return $this->hasMany(cargoPersona::class, 'id_nivel');
    }
}
