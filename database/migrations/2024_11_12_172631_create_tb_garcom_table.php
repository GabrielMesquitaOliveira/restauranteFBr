<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_garcom', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->char('telefone', 11);
            $table->date('data_de_contratacao');
            $table->integer('numero_de_pedidos_servidos');
            $table->foreignId('id_gerente')->constrained('tb_gerente');
            $table->string('email')->unique(); // Email único
            $table->string('password'); // Senha
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_garcom');
    }
};
