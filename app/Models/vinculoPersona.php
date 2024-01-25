<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vinculoPersona extends Model
{
    use HasFactory;

    protected $table = 'vinculo_personas';
    protected $fillable = ['id','id_vinculo', 'id_persona1', 'id_persona2', 'descripcion'];

    public function persona1(){
        return $this->belongsTo(persona::class, 'id_persona1');
    }
    
    public function persona2(){
        return $this->belongsTo(persona::class, 'id_persona2');
    }
    
    public function vinculo(){
        return $this->belongsTo(tipoVinculo::class, 'id_vinculo');
    }

}
