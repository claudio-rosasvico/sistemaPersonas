<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cargoPersona extends Model
{
    use HasFactory;

    protected $table = 'cargo_personas';
    protected $fillable = ['id', 'nombre', 'id_tipo_cargo', 'id_nivel', 'id_persona', 'id_localidad'];

    public function tipoCargo(){
        return $this->belongsTo(tipoCargo::class, 'id_tipo_cargo');
    }
    
    public function nivel(){
        return $this->belongsTo(nivelCargo::class, 'id_nivel');
    }

    public function persona(){
        return $this->belongsTo(persona::class, 'id_persona');
    }
    
    public function localidad(){
        return $this->belongsTo(localidad::class, 'id_localidad');
    }
    
}
