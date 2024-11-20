<?php

use App\Models\Cargo;
use App\Models\Funcionario;
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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Cargo::class)->constrained();
            $table->string('Nome', 100);
            $table->string('Telefone', 10);
            $table->timestamps();
        });

        // Adiciona a FK de funcionarios em users
        Schema::table('users', function (Blueprint $table) {
            $table->foreignIdFor(Funcionario::class)
                  ->nullable()
                  ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove a FK de funcionarios em users
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignIdFor(Funcionario::class);
        });

        // Remove a tabela funcionarios
        Schema::dropIfExists('funcionarios');
    }
};
