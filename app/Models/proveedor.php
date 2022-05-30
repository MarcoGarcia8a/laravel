<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;

    protected $primaryKey = 'proveedorId';

    public function marcas(){
        return $this->belongsTo(marca::class, 'marcaId', 'marcaId');
    }

    public function productos(){
        return $this->hasMany(producto::class);
    }
}
