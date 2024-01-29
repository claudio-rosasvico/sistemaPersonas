<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Contracts\Activity;
use Spatie\Activitylog\Traits\LogsActivity;

class persona extends Model 
{
    use HasFactory;

    protected $table = 'personas';
    protected $fillable = [ 'id', 'nombre', 'apellido', 'fecha_nac', 'profesion', 'id_localidad', 'foto', 'nombre_foto', 'twitter', 'facebook', 'instagram', 'tiktok', 'id_user'];

    public function localidad(){
        return $this->belongsTo(localidad::class, 'id_localidad');
    }

    public function registro(){
        return $this->hasMany(registro::class, 'id_persona');
    }
    
    public function cargo(){
        return $this->hasMany(cargoPersona::class,'id_persona');
    }
    
    public function asociado(){
        return $this->hasMany(asociado::class, 'id_persona');
    }
    
    public function vinculo1(){
        return $this->hasMany(vinculoPersona::class, 'id_persona1');
    }
    
    public function vinculo2(){
        return $this->hasMany(vinculoPersona::class, 'id_persona2');
    }
}


