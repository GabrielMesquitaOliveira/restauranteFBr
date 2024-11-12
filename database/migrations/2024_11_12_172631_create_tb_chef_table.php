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
        Schema::create('tb_chef', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->char('telefone', 11);
            $table->date('data_de_contratacao');
            $table->integer('numero_de_pratos_preparados');
            $table->foreignId('id_gerente')->constrained('tb_gerente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_chef');
    }
};
