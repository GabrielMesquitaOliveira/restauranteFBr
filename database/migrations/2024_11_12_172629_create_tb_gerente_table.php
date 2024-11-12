<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_gerente', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique(); // Email único
            $table->string('password'); // Senha
            $table->integer('num_func_supervisionados');
            $table->longText('relatorio_de_vendas');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('tb_gerente');
    }
};
