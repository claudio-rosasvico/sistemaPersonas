<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asociado extends Model
{
    use HasFactory;

    protected $table = 'asociados';
    protected $fillable = [ 'id', 'id_persona', 'id_registro'];

    public function persona(){
        return $this->belongsTo(persona::class, 'id_persona');
    }
    
    public function registro(){
        return $this->belongsTo(registro::class, 'id_registro');
    }
}
