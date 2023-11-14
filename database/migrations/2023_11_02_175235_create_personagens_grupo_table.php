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
        Schema::create('personagens_grupo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personagem_id')->constrained('personagens');
            $table->foreignId('grupo_id')->constrained('grupos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personagens_grupo');
    }
};
