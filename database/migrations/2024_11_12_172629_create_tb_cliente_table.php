<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->char('telefone', 11);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_cliente');
    }
};
