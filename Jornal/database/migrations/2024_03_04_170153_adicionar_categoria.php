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
        Schema::table('jornal', function (Blueprint $table) {
            $table->string('categoria')->nullable(); // Exemplo de adição de uma nova coluna
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jornal', function (Blueprint $table) {
            $table->dropColumn('categoria'); // Caso deseje reverter a alteração, você pode definir a operação de rollback aqui
        });

    }
};
