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
        Schema::create('oferta', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_empresa')->index();
            $table->string('titulo');
            $table->text('descripcion');
            $table->text('requisitos');
            $table->bigInteger('duracion');
            $table->bigInteger('renumeracion');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->longText('habilidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oferta');
    }
};
