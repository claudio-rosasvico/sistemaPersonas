<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class provincia extends Model
{
    use HasFactory, HasRoles, HasPermissions;
    protected $table = 'provincias';
    protected $fillable = [ 'id', 'nombre'];

    public function localidad(){
        return $this->hasMany(localidad::class);
    }
}
