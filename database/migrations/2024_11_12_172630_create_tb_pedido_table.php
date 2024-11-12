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
        Schema::create('tb_pedido', function (Blueprint $table) {
            $table->id();
            $table->dateTime('dt_pedido');
            $table->decimal('valor_total', 10, 2);
            $table->string('status_pdd', 50);
            $table->foreignId('id_cliente')->constrained('tb_cliente');
            $table->foreignId('id_garcom')->constrained('tb_garcom');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pedido');
    }
};
