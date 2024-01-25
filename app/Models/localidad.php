<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class localidad extends Model
{
    use HasFactory, HasRoles, HasPermissions;
    protected $table = 'localidades';
    protected $fillable = [ 'id', 'id_provincia', 'nombre'];

    public function provincia(){
        return $this->belongsTo(provincia::class, 'id_provincia');
    }

    public function persona(){
        return $this->hasMany(persona::class);
    }
}
