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
        Schema::create('cargo_personas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre')->nullable();
            $table->integer('id_tipo_cargo');
            $table->integer('id_nivel');
            $table->integer('id_persona');
            $table->integer('id_localidad')->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_final')->nullable();
            $table->boolean('cargo_actual')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargo_personas');
    }
};
