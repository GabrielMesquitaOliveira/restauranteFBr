<?php

use App\Models\Cliente;
use App\Models\Mesa;
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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('ID_Reserva');
            $table->foreignIdFor(Cliente::class)->onDelete('cascade');
            $table->foreignIdFor(Mesa::class)->onDelete('cascade');
            $table->string('Observacao',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
