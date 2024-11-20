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
            $table->id();
            $table->foreignIdFor(Funcionario::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Pedido::class)->constrained()->nullOnDelete();
            $table->foreignIdFor(Mesa::class)->nullable()->constrained()->nullOnDelete();
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
