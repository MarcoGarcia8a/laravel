<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $primaryKey = 'clienteId';

    public function ventas(){
        return $this->hasMany(venta::class);
    }
}
