<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agrupacion extends Model
{
    use HasFactory;

    protected $table = 'agrupaciones';
    protected $fillable = ['id', 'nombre', 'nombre_foto'];

    public function persona(){
        return $this->hasMany(persona::class, 'id_agrupacion');
    }
}
