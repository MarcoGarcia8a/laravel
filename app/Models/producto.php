<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'productoId';

    public function proveedors(){
        return $this->belongsTo(proveedor::class, 'proveedorId', 'proveedorId');
    }

    public function ventas(){
        return $this->belongsToMany(venta::class, 'productoventa', 'productoId', 'ventaId')->withPivos('id');
    }
}
