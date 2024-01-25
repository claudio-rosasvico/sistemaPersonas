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
        Schema::create('vinculo_personas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_vinculo');
            $table->integer('id_persona1');
            $table->integer('id_persona2');
            $table->string('descripcion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinculo_personas');
    }
};
