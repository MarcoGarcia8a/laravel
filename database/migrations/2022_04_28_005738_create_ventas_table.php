<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('ventaId');
            $table->date('fechaVenta');
            $table->integer('totalVenta');
            $table->integer('cantidad');
            $table->unsignedBigInteger('empleadoId');
            $table->foreign('empleadoId')->references('empleadoId')->on('empleados')->onDelete('cascade');
            $table->unsignedBigInteger('clienteId');
            $table->foreign('clienteId')->references('clienteId')->on('clientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
};
