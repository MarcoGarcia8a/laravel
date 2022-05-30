<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;

    protected $primaryKey = 'ventaId';

    public function clientes(){
        return $this->belongsTo(cliente::class, 'clienteId', 'clienteId');
    }

    public function empleados(){
        return $this->belongsTo(empleado::class, 'empleadoId', 'empleadoId');
    }

    public function productos(){
        return $this->belongsToMany(producto::class, 'productoventa', 'ventaId', 'productoId')->withPivot('id');
    }
}
