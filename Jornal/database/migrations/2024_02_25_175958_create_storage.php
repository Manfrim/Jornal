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
        Schema::create('Jornal', function (Blueprint $table) {
            $table->id();
            $table->text('nome_materia');
            $table->text('resumo_materia');
            $table->longtext('materia_p1');
            $table->longtext('materia_p2');
            $table->longtext('materia_p3');
            $table->longtext('materia_p4');
            $table->longtext("imagem_capa");
            $table->text("imagem_1");
            $table->text("imagem_2");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Jornal');
    }
};
