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
        Schema::create('productoventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productoId');
            $table->foreign('productoId')->references('productoId')->on('productos')->onDelete('cascade');
            $table->unsignedBigInteger('ventaId');
            $table->foreign('ventaId')->references('ventaId')->on('ventas')->onDelete('cascade');
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
        Schema::dropIfExists('productoventas');
    }
};
