<?php

use App\Models\Cliente;
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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Cliente::class)->constrained()->cascadeOnDelete();
            $table->string('Rua', 255);
            $table->string('Numero', 10);
            $table->string('Bairro', 100);
            $table->string('Cidade', 100);
            $table->char('Estado', 2);
            $table->string('CEP', 10);
            $table->string('Complemento', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
