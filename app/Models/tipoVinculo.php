<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoVinculo extends Model
{
    use HasFactory;

    protected $table = 'tipo_vinculos';
    protected $fillable = ['id', 'nombre'];

    public function vinculo(){
        return $this->hasMany(vinculoPersona::class, 'id_vinculo');
    }
}
