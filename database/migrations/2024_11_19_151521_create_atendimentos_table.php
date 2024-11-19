<?php

use App\Models\Funcionario;
use App\Models\Mesa;
use App\Models\Pedido;
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
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id('ID_Atendimento');
            $table->foreignIdFor(Funcionario::class)->nullable()->onDelete('cascade');
            $table->foreignIdFor(Pedido::class)->onDelete('cascade');
            $table->foreignIdFor(Mesa::class)->nullable()->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentos');
    }
};
