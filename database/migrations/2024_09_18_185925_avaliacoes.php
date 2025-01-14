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
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projeto_id')->constrained()->onDelete('cascade');
            $table->foreignId('quesito_avaliativo_id')->constrained('quesitos_avaliativos')->onDelete('cascade');
            $table->foreignId('avaliador_id')->constrained('avaliadores')->onDelete('cascade');
            $table->timestamps();
        });
    }
};
