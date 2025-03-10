<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('equipajes', function (Blueprint $table) {
        $table->id('id_equipaje'); 
        $table->unsignedBigInteger('id_cliente'); 
        $table->unsignedBigInteger('id_vuelo'); 
        $table->decimal('peso', 8, 2); 
        $table->string('dimensiones', 100); 
        $table->integer('cantidad'); 
        $table->enum('tipo', ['equipaje en mano', 'equipaje facturado']);
        // relaciones
        $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('cascade');
        $table->foreign('id_vuelo')->references('id_vuelo')->on('vuelos')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipajes');
    }
};
