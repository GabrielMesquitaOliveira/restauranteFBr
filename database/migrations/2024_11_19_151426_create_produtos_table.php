<?php

use App\Models\CategoriaProduto;
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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('ID_Produto');
            $table->foreignId(CategoriaProduto::class)->onDelete('set null');
            $table->string('Imagem', 255)->nullable();
            $table->string('Nome', 100);
            $table->decimal('Preco', 10, 2);
            $table->text('Descricao')->nullable();
            $table->boolean('Disponivel')->default(true);
            $table->integer('Quantidade_Estoque')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
