<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tb_endereco_cliente', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro')->nullable();
            $table->char('numero', 10)->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->char('cep', 8)->nullable();
            $table->string('cidade')->nullable();
            $table->foreignId('id_cliente')->constrained('tb_cliente');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_endereco_cliente');
    }
};
